<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Exception;

use App\Models\Post;
use App\Models\Follow;

class HomepageController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => []]);
        $this->middleware('supporter', ['except' => ['view']]);
    }

    public function index()
    {
        $followed = Follow::with('followerDetail')->where('follower', Auth::user()->id)->get();
        $followed_id = array();
        foreach($followed as $follow){
            $followed_id[] = $follow->followed;
        }
        // dd($followed_id);
        // 

        $posts = Post::with('user')->whereIn('user_id', $followed_id)->get();
        foreach ($posts as $post){
            if(strpos($post->content, '. '))
            $post->content = substr($post->content, 0, strpos($post->content, '. ', strpos($post->content, '. ')+1)+1);
        }
        
        return view('supporter.home_supporter', ['posts' => $posts]);
    }

}
