<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {

        $user =User::find($id);
        $posts = Post::whereIn("user_id", [$id])->get();
        $postsCount= $posts->count();

        $followers = $user->followedBy->pluck('id')->count();
        $following = $user->following->pluck('id')->count();
        return view('prof', compact('posts', 'user', 'postsCount','followers','following') );
    }
}
