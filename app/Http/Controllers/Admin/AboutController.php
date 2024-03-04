<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AboutRequest;
use App\Http\Services\Admin\AboutService;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    protected $aboutService;

    public function __construct(AboutService $aboutService)
    {
        $this->aboutService = $aboutService;
    }


    public function index()
    {
        $abouts = $this->aboutService->getAllAbouts();

        return view('admin.about.index', compact('abouts'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(AboutRequest $request)
    {
        $this->aboutService->createAbout($request);

        return redirect(route('admin.about.index'));
    }

    public function show(string $id)
    {
        $about = $this->aboutService->getAboutById($id);

        return view('admin.about.show', compact('about'));
    }

    public function edit(string $id)
    {
        $about = $this->aboutService->getAboutById($id);

        return view('admin.about.create', compact('about'));
    }

    public function update(AboutRequest $request, string $id)
    {
        $this->aboutService->updateAbout($request, $id);

        return redirect(route('admin.about.index'));
    }

    public function delete(string $id)
    {
        $this->aboutService->deleteAbout($id);

        return redirect(route('admin.about.index'));
    }
}
