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

//creator from supporter
Route::get('{slug}/post/{id}', 'PostController@show');

//homepage
Route::get('/homepage', 'HomepageController@index');

//dashboard
Route::get('/dashboard', 'DashboardController@index');

//post
Route::get('/post', 'PostController@index');
Route::get('/post/create', 'PostController@create');
Route::get('/post/create/category', 'PostController@createCategory');

Route::post('/post/{id}/edit', 'PostController@edit');
Route::post('/post/create', 'PostController@createAction');
Route::post('/post/create/category', 'PostController@createCategoryAction');

Route::patch('/post/{id}/edit', 'PostController@editAction');

Route::delete('post/{id}/delete', 'PostController@delete');
