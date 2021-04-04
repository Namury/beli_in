<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Exception;

use App\Models\User;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => []]);
        $this->middleware('creator', ['except' => []]);
    }

    public function index()
    {
        // $user = Auth::user()->isCreator();
        // $user = User::isCreator();
        // dd($user);
        return view('creator.dashboard');

    }
}