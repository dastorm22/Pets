<?php

use Illuminate\Http\Request;

/*php
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources(['user' => 'API\UserController']);
Route::get('profile', 'API\UserController@profile');
Route::get('findUser', 'API\UserController@search');
Route::put('profile', 'API\UserController@updateProfile');
Route::get('redirect', 'SocialAuthFacebookController@redirect');
Route::get('callback', 'SocialAuthFacebookController@callback');
Route::get('redirectg', 'SocialAuthGoogleController@redirect');
Route::get('callbackg', 'SocialAuthGoogleController@callback');
Route::get('posts','API\PostsController@index');
Route::post('posts','API\PostsController@store');
