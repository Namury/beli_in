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
Route::get('/register', 'AuthController@registerOption');
Route::get('/register/creator', 'AuthController@registerCreator');
Route::get('/register/supporter', 'AuthController@registerSupporter');
Route::get('/my-account', 'MyAccountController@index');
Route::get('/my-account/following', 'MyAccountController@following');
Route::get('/my-account/follower', 'MyAccountController@creatorFollower');
Route::get('/logout', 'AuthController@logout');
Route::get('/unfollow/{id}', 'FollowController@unfollow');

Route::post('/login', 'AuthController@loginAction');
Route::post('/register/creator', 'AuthController@registerCreatorAction');
Route::post('/register/supporter', 'AuthController@registerSupporterAction');
Route::post('/follow/{id}', 'FollowController@index');

Route::patch('/my-account/edit/creator', 'MyAccountController@editProfileCreatorAction');
Route::patch('/my-account/edit/supporter', 'MyAccountController@editProfileSupporterAction');

//creator from supporter
Route::get('{slug}/support', 'SupportController@index');
Route::get('{slug}/order', 'SupportController@order');
Route::get('{slug}/post/{id}', 'PostController@show');

Route::post('{slug}/order', 'SupportController@orderAction');

//homepage
Route::get('/homepage', 'HomepageController@index');

//dashboard
Route::get('/dashboard', 'DashboardController@index');
Route::get('/supporter', 'SupportController@getSupporter');
Route::get('/setting', 'SettingController@index');

//item

Route::get('/item/create', 'SettingController@createItem');
Route::get('/item/{id}/edit', 'SettingController@editItem');
Route::post('/item/create', 'SettingController@createItemAction');
Route::patch('/item/{id}/edit', 'SettingController@editItemAction');
Route::patch('/item/edit', 'SettingController@editAllItemAction');
Route::delete('item/{id}/delete', 'SettingController@deleteItem');

//explore
Route::get('/explore', 'ExploreController@index');
Route::post('/explore', 'ExploreController@index');

//post
Route::get('/post', 'PostController@index');
Route::get('/post/create', 'PostController@create');
Route::get('/post/create/category', 'PostController@createCategory');

Route::post('/post/{id}/edit', 'PostController@edit');
Route::post('/post/create', 'PostController@createAction');
Route::post('/post/create/category', 'PostController@createCategoryAction');

Route::patch('/post/{id}/edit', 'PostController@editAction');

Route::delete('post/{id}/delete', 'PostController@delete');
