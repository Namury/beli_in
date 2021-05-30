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

    public function editProfileCreatorAction(Request $request)
    {
        try{
            DB::beginTransaction();
            
            $user = User::where('id', Auth::user()->id)->first();
            $user->name = $request->name;
            $user->description = $request->description;
            $user->user_type_id = $request->user_type_id;
            $user->page_name = $request->page_name;
            $user->page_slug = $this->nameToSlug($request->page_name);

            if($request->has('image')) {
                $image = $request->file('image');
                if(config('app.env') != 'local'){
                    $user->profile_picture = $image->store('profile', 'public_production_upload');   
                } else{
                    $user->profile_picture = $image->store('profile', 'public_local_upload');   
                }
            }

            $user->save();

            DB::commit();
        } catch(Exception $e){
            DB::rollBack();
			$output = $e->getMessage();
            dd($output);
			return redirect('/my-account')->withErrors(['msg', $output]);
        }
        return redirect('/my-account');
    }

    public function editProfileSupporterAction(Request $request)
    {
        try{
            DB::beginTransaction();
            
            $user = User::where('id', Auth::user()->id)->first();
            $user->name = $request->name;

            if($request->has('image')) {
                $image = $request->file('image');
                if(config('app.env') != 'local'){
                    $user->profile_picture = $image->store('profile', 'public_production_upload');   
                } else{
                    $user->profile_picture = $image->store('profile', 'public_local_upload');   
                }
            }
            
            $user->save();

            DB::commit();
        } catch(Exception $e){
            DB::rollBack();
			$output = $e->getMessage();
            dd($output);
			return redirect('/my-account')->withErrors(['msg', $output]);
        }
        
        return redirect('/my-account');
    }

    public function creator()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $user_types = UserType::get();

        return view ('creator.profile_creator', ['user' => $user, 'user_types' => $user_types]);
    }

    public function creatorFollowing()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $following = Follow::where('follower', $user->id)->with('followingDetail')->get();
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

        return view ('supporter.profile_supporter', ['user' => $user]);
    }

    public function supporterFollowing()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $following = Follow::where('follower', $user->id)->with('followingDetail')->get();
        return view ('supporter.following_suporter', ['user' => $user, 'following' => $following]);
    }

    private function nameToSlug($string){
        $string = str_replace(array('[\', \']'), '', $string);
        $string = preg_replace('/\[.*\]/U', '', $string);
        $string = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $string);
        $string = htmlentities($string, ENT_COMPAT, 'utf-8');
        $string = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\\1', $string );
        $string = preg_replace(array('/[^a-z0-9]/i', '/[-]+/') , '-', $string);
        return strtolower(trim($string, '-'));
    }
}
