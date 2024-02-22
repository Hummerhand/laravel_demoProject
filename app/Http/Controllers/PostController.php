<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentFormRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public  function index()
    {
        $posts = Post::query()->orderBy('created_at', 'DESC')->get();

        return view('posts.post', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::query()->findOrFail($id);

        return view('posts.show', compact('post'));
    }

    public function comment($id, CommentFormRequest $request)
    {
        $post = Post::query()->findOrFail($id);

        $data = $request->validated();

        $post->comments()->create($data);

        return redirect(route('posts.show', $id));
    }
}
