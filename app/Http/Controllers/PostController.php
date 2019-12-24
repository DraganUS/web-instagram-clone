<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PostController extends Controller
{
    public function show($post)
    {
        $post = Post::find($post);
        $userId = $post->user_id;
        $user = User::find($userId);
        $authUser = auth()->id();
        return view('post', compact('post', 'user', 'authUser'));
    }

    public function store($request)
    {
dd($request);
        Post::create($request->all());

    }

}
