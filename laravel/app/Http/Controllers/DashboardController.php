<?php

namespace sales\Http\Controllers;

use Illuminate\Http\Request;
use sales\Post;
use sales\User;
use DB;

class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id)->orderBy('created_at', 'desc');
        $posts = Post::where('user_id', '=', "$user_id")->orderBy('created_at', 'desc')->paginate(10);
        $topposts = Post::where('amount','>', '20')->paginate(5);
        return view('dashboard',[
            'posts'=> $posts, 'topposts'=> $topposts
        ]);
    }
}
