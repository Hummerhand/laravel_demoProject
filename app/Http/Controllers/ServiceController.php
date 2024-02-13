<?php

namespace App\Http\Controllers;


use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public  function index()
    {
        $services = Service::query()->orderBy('created_at', 'DESC')->get();

        return view('services.service', compact('services'));
    }

    public function show($id)
    {
        $service = Service::query()->findOrFail($id);

        return view('services.show', compact('service'));
    }


}
