<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\SubscribeFormRequest;
use App\Mail\ContactForm;
use App\Models\ContactUs;
use App\Models\Photo;
use App\Models\Post;
use App\Models\Service;
use App\Models\Subscribe;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index()
    {
        $services = Service::query()->orderBy('created_at', 'DESC')->get();

        $posts = Post::query()->orderBy('created_at', 'DESC')->get();

        $testimonials = Testimonial::query()->orderBy('created_at', 'DESC')->get();

        $photos = Photo::query()->orderBy('created_at', 'ASC')->get();

        return view('index', compact('services', 'posts', 'testimonials', 'photos'));
    }

    public function about()
    {
        return view('about.about');
    }

    public function service()
    {
        return view('service');
    }

    public function contact_process(ContactFormRequest $request)
    {
        $data = $request->validated();

        $contact = ContactUs::query()->create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'text' => $data['text'],
        ]);

        Mail::to("sh-ranger@mail.ru")->send(new ContactForm($request->validated()));

        return redirect(route('home'));
    }

    public function subscribe_process(SubscribeFormRequest $request)
    {
        $data = $request->validated();

        $subscribe = Subscribe::query()->create([
            'email' => $data['email']
        ]);

        return redirect(route('home'));
    }
}
