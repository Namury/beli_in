<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Exception;

use App\Models\User;
use App\Models\UserType;

class AuthController extends Controller
{

    public function __construct() {
        $this->middleware('auth', ['only' => ['logout']]);
    }

    public function index()
    {
        if (Auth::check()){
            return redirect('/dashboard');
        }else{
            return view('landing');
        }
    }

    //register
    public function registerCreator(Request $request)
    {
        $user_types = UserType::get();
        $page_name = null;
        if($request->page_name != null){
            $page_name = $request->page_name;
        }
        return view('register_creator', ['user_types' => $user_types, 'page_name' => $page_name]);
    }

    public function registerSupporter(Request $request)
    {
        return view('register_supporter');
    }

    public function registerCreatorAction(Request $request)
    {
        try{
            DB::beginTransaction();
            
            $user = new User;
            $user->user_type_id = $request->user_type_id;
            $user->user_role_id = 1;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->description = $request->description;
            $user->password = bcrypt($request->password);
            $user->page_name = $request->page_name;
            $user->page_slug = $this->nameToSlug($request->page_name);
            $user->save();

            DB::commit();
        } catch(Exception $e){
            DB::rollBack();
			$output = $e->getMessage();
			return redirect('/register/creator')->withErrors(['msg', $output]);
        }
        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        return redirect('/');
    }

    public function registerSupporterAction(Request $request)
    {
        try{
            DB::beginTransaction();
            
            $user = new User;
            $user->user_role_id = 2;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();

            DB::commit();
        } catch(Exception $e){
            DB::rollBack();
			$output = $e->getMessage();
			return redirect('/register/supporter')->withErrors(['msg', $output]);
        }
        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        return redirect('/');
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

    //login
    public function login()
    {
        return view('login');
    }

    public function loginAction(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    //logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    
}
