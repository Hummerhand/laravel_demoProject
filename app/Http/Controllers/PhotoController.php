<?php

namespace App\Http\Controllers;

use App\Models\Photo;

class PhotoController extends Controller
{
    public  function index()
    {
        $photos = Photo::query()->orderBy('created_at', 'DESC')->get();

        return view('photos.photo', compact('photos'));
    }

    public function show($id)
    {
        $photo = Photo::query()->findOrFail($id);

        return view('photos.show', compact('photo'));
    }
}
