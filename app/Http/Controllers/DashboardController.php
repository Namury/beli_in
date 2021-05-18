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
        return view('creator.home_creator', ['posts' => $posts]);
    }
}
