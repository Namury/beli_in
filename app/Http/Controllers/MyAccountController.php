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

    public function following()
    {
        if(Auth::user()->user_role_id == 1){
            return $this->creatorFollowing();
        } else if(Auth::user()->user_role_id == 2){
            return $this->supporterFollowing();
        }
    }

    public function creator()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $user_types = UserType::get();
        $follower = Follow::where('followed', $user->id)->with('followerDetail')->get();
        $following = Follow::where('follower', $user->id)->with('followingDetail')->get();

        return view ('creator.profile_creator', ['user' => $user, 'user_types' => $user_types, 'follower' => $follower, 'following' => $following]);
    }

    public function creatorFollowing()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $following = Follow::where('follower', $user->id)->with('followingDetail')->get();
        // dd($following);
        return view ('creator.following_creator', ['user' => $user, 'following' => $following]);
    }

    public function creatorFollower()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $follower = Follow::where('followed', $user->id)->with('followerDetail')->get();
        // dd($follower);
        return view ('creator.followers_creator', ['user' => $user, 'follower' => $follower]);
    }

    public function supporter()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $following = Follow::where('follower', $user->id)->with('follower')->get();

        return view ('creator.my_account', ['user' => $user, 'following' => $following]);
    }

    public function supporterFollowing()
    {

    }
}
