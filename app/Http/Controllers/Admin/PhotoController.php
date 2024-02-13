<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PhotoFormRequest;
use App\Models\Photo;
use App\Models\Post;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::query()->orderBy('created_at', "DESC")->paginate(5);

        return view('admin.photos.index', compact('photos'));
    }

    public function create()
    {
        return view('admin.photos.create');
    }

    public function store(PhotoFormRequest $request)
    {
        $data = $request->validated();

        if ($request->has('image')) {

            $image = str_replace('public/photos', '', $request->file('image')->store('public/photos'));

            $data['image'] = $image;
        }

        $photo = Photo::query()->create($data);

        return redirect(route('admin.photos.index'));
    }

    public function show(string $id)
    {
        $photo = Photo::query()->findOrFail($id);

        return view('admin.photos.show', compact('photo'));
    }

    public function edit(string $id)
    {
        $photo = Photo::query()->findOrFail($id);

        return view('admin.photos.create', compact('photo'));
    }

    public function update(PhotoFormRequest $request, string $id)
    {
        $data = $request->validated();

        $photo = Photo::query()->findOrFail($id);

        if ($request->has('image')) {

            $image = str_replace('public/photos', '', $request->file('image')->store('public/photos'));

            $data['image'] = $image;
        }

        $photo->update($data);

        return redirect(route('admin.photos.index'));
    }

    public function delete(string $id)
    {
        Photo::destroy($id);

        return redirect(route('admin.photos.index'));
    }

}
