<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Exception;

use App\Models\User;
use App\Models\UserType;
use App\Models\Follow;


class MyAccountController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => []]);
        $this->middleware('creator', ['only' => ['creator']]);
        $this->middleware('supporter', ['only' => ['supporter']]);
    }

    public function index()
    {
        if(Auth::user()->user_role_id == 1){
            return $this->creator();
        } else if(Auth::user()->user_role_id == 2){
            return $this->supporter();
        }
    }

    public function creator()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $user_types = UserType::get();
        $follower = Follow::where('followed', $user->id)->with('followed')->get();
        $following = Follow::where('follower', $user->id)->with('follower')->get();

        return view ('creator.my_account', ['user' => $user, 'user_types' => $user_types, 'follower' => $follower, 'following' => $following]);
    }

    public function supporter()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $following = Follow::where('follower', $user->id)->with('follower')->get();

        return view ('creator.my_account', ['user' => $user, 'following' => $following]);
    }
}
