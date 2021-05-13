<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('auth')->group(function () {
	Route::post('register', 'Api\AuthController@register');
    Route::post('login', 'Api\AuthController@login');
    Route::post('logout', 'Api\AuthController@logout');
    Route::post('refresh', 'Api\AuthController@refresh');
    Route::post('password/forgot', 'Api\PasswordController@forgotPasswordUser');
    Route::post('password/reset', 'Api\PasswordController@resetPasswordUser');

    Route::get('redirect/{provider}/user', 'Api\SocialController@redirectUser');
    Route::get('redirect/{provider}/teacher', 'Api\SocialController@redirectTeacher');
    Route::get('redirect/{provider}/callback', 'Api\SocialController@callback');
});
