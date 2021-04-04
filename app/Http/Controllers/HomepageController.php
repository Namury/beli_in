<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => []]);
        $this->middleware('supporter', ['except' => []]);
    }

    public function index()
    {
        // $user = Auth::user()->isCreator();
        // $user = User::isCreator();
        // dd($user);
        return view('supporter.homepage');

    }
}
