<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Exception;

use App\Models\Post;
use App\Models\User;

class ExploreController extends Controller
{
    public function __construct() {

    }
    
    public function index(){
        $posts = Post::with('user')->inRandomOrder()->limit(10)->get();
        return view('explore', ['posts' => $posts]);
    }
}
