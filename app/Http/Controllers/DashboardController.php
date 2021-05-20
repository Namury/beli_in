<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Exception;

use App\Models\User;
use App\Models\Post;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => []]);
        $this->middleware('creator', ['except' => []]);
    }

    public function index()
    {
        $posts = Post::with('user')->where('user_id', Auth::user()->id)->get();
        foreach ($posts as $post){
            if(strpos($post->content, '. '))
            $post->content = substr($post->content, 0, strpos($post->content, '. ', strpos($post->content, '. ')+1)+1);
        }
        return view('creator.home_creator', ['posts' => $posts]);
    }
}
