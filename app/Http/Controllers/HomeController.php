<?php

namespace App\Http\Controllers;

use App\Follow;
use App\Post;
use App\Story;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userId = auth()->id();

        $followed = \Auth::user()->following->pluck('id');

        $posts = Post::whereIn("user_id", $followed)->with(['user'])->paginate(35);

        $stories = Story::whereIn("user_id", $followed)->with(['user'])->paginate(35);

        $authUser = User::find($userId);

        return view('home', compact('posts', 'authUser', 'stories'));
    }
}
