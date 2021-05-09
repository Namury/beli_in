<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Exception;

use App\Models\User;
use App\Models\Post;

class SupportController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => []]);
    }

    public function index($slug)
    {
        $creator = User::where('page_slug', $slug)->first();
        $posts = Post::where('user_id', $creator->id)->with('category')->get();
        // foreach($posts as $post){
        //     if(strpos($post->content, '. '))
        //         $post->content = substr($post->content, 0, strpos($post->content, '. ', strpos($post->content, '. ')+1)+1);
        // }
        return view('creator.support', ['creator' => $creator, 'posts' => $posts]);
    }
    
    public function support()
    {
        
    }

}
