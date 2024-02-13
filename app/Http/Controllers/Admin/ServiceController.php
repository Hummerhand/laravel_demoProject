<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceFormRequest;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::query()->orderBy('created_at', 'DESC')->paginate(3);

        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(ServiceFormRequest $request)
    {
        $data = $request->validated();

        if ($request->has('thumbnail')) {
            $thumbnail = str_replace('public/services', '', $request->file('thumbnail')->store('public/services'));

            $data['thumbnail'] = $thumbnail;
        }

        $service = Service::query()->create($data);

        return redirect(route('admin.services.index'));
    }

    public function show(string $id)
    {
        $service = Service::query()->findOrFail($id);

        return view('admin.services.show', compact('service'));
    }

    public function edit(string $id)
    {
        $service = Service::query()->findOrFail($id);

        return view('admin.services.create', compact('service'));
    }

    public function update(ServiceFormRequest $request, string $id)
    {

        $service = Service::query()->findOrFail($id);

        $data = $request->validated();

        if ($request->has('thumbnail')) {
            $thumbnail = str_replace('public/services', '', $request->file('thumbnail')->store('public/services'));

            $data['thumbnail'] = $thumbnail;
        }

        $service->update($data);

        return redirect(route('admin.services.index'));
    }

    public function delete(string $id)
    {
        Service::destroy($id);

        return redirect(route('admin.services.index'));
    }
}
