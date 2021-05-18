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
        $this->middleware('auth', ['except' => []]);
    }
    
    public function index(){
        $users = User::with('follower')->where('user_role_id', 1)->inRandomOrder()->limit(10)->get();
        
        if(Auth::user()->user_role_id == 1){
            
            return view('creator.explore_creator', ['users' => $users]);
        }
        if(Auth::user()->user_role_id == 2){
            return view('supporter.explore_supporter', ['users' => $users]);
        }
    }
}
