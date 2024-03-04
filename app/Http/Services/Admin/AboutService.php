<?php

namespace App\Http\Services\Admin;

use App\Models\About;

class AboutService
{
    public function getAllAbouts()
    {
        return About::query()->get();
    }

    public function getAboutById(string $id)
    {
        return About::query()->findOrFail($id);
    }

    public function createAbout($request)
    {
        $data = $request->validated();

        if ($request->has('thumbnail')) {

            $image = str_replace('public/abouts', '', $request->file('thumbnail')->store('public/abouts'));

            $data['thumbnail'] = $image;
        }

        return About::query()->create($data);
    }

    public function updateAbout(string $id, $request)
    {
        $about = About::query()->findOrFail($id);

        $data = $request->validated();

        if ($request->has('thumbnail')) {

            $image = str_replace('public/abouts', '', $request->file('thumbnail')->store('public/abouts'));

            $data['thumbnail'] = $image;
        }

        $about->update($data);

        return $about;
    }

    public function deleteAbout(string $id)
    {
        return About::destroy($id);

    }
}
