<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Exception;

use App\Models\Follow;
use App\Models\User;

class FollowController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth', ['except' => []]);
    }

    public function index($id)
    {
        if(Auth::user()->id == $id){
            return redirect(User::where('id', $id)->first()->page_slug.'/support/')->withErrors(['msg', 'You cannot follow yourself']);
        }

        $follow = Follow::where([['follower', Auth::user()->id], ['followed', $id]])->first();
        if($follow == null){
            try{
                DB::beginTransaction();
                
                $follow = new Follow;
                $follow->follower = Auth::user()->id;
                $follow->followed = $id;
                $follow->save();
    
                DB::commit();
            } catch(Exception $e){
                DB::rollBack();
                $output = $e->getMessage();
                return redirect(User::where('id', $id)->first()->page_slug.'/support/')->withErrors(['msg', $output]);
            }
            return redirect(User::where('id', $id)->first()->page_slug.'/support/');
        } else{
            return redirect(User::where('id', $id)->first()->page_slug.'/support/')->withErrors(['msg', 'You Already Followed']);
        }
    }

    public function unfollow($id)
    {
        if(Auth::user()->id == $id){
            return redirect(User::where('id', $id)->first()->page_slug.'/support/')->withErrors(['msg', 'You cannot follow yourself']);
        }

        $follow = Follow::where([['follower', Auth::user()->id], ['followed', $id]])->first();
        if($follow != null){
            try{
                $follow->delete();
            } catch(Exception $e){
                $output = $e->getMessage();
                return redirect('/my-account/following')->withErrors(['msg', $output]);
            }
            return redirect('/my-account/following');
        } else{
            return redirect('/my-account/following')->withErrors(['msg', 'You Already Followed']);
        }
    }
}
