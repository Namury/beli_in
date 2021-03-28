<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//auth
Route::get('/', 'AuthController@index');
Route::get('/login', 'AuthController@login')->name('login');
Route::get('/register/creator', 'AuthController@registerCreator');
Route::get('/register/supporter', 'AuthController@registerSupporter');
Route::get('/logout', 'AuthController@logout');

Route::post('/login', 'AuthController@loginAction');
Route::post('/register/creator', 'AuthController@registerCreatorAction');
Route::post('/register/supporter', 'AuthController@registerSupporterAction');

//dashboard
Route::get('/dashboard', 'DashboardController@index');
