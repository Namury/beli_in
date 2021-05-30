<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Exception;

use App\Models\Post;
use App\Models\User;
use App\Models\UserType;

class ExploreController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => []]);
    }
    
    public function index(Request $request){
        $users = User::with('follower')->where('user_role_id', 1)->inRandomOrder()->limit(10)->get();
        $user_types = UserType::get();
        $search_name = $request->name;
        $search_category = $request->category;

        if($search_name != null){
            $users = User::with('follower')
                ->where('user_role_id', 1)
                ->where('name', 'like', "%{$search_name}%")
                ->orwhere('page_slug', 'like', "%{$search_name}%")
                ->orwhere('page_name', 'like', "%{$search_name}%")
                ->orwhere('description', 'like', "%{$search_name}%")
                ->inRandomOrder()
                // ->limit(10)
                ->get();
            }
        if($search_category != null){
            $users = User::with('follower')
            ->where([['user_role_id', 1], ['user_type_id', $search_category]])
            ->inRandomOrder()
            // ->limit(10)
            ->get();
            // dd($search_category);
        }


        if(Auth::user()->user_role_id == 1){
            
            return view('creator.explore_creator', ['users' => $users, 'user_types' => $user_types]);
        }
        if(Auth::user()->user_role_id == 2){
            return view('supporter.explore_supporter', ['users' => $users, 'user_types' => $user_types]);
        }
    }
}
