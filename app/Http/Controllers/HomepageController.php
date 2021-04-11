<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class HomepageController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => []]);
        $this->middleware('supporter', ['except' => ['view']]);
    }

    public function index()
    {
        $posts = Post::with('user')->inRandomOrder()->limit(10)->get();
        return view('supporter.homepage', ['posts' => $posts]);
    }

}
