<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public  function index()
    {
        $about = About::query()->first();

        return view('about.index', compact('about'));
    }

    public function show($id)
    {
        $about = About::query()->findOrFail($id);

        return view('about.about', compact('about'));
    }
}
