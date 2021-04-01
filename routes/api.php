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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// API Users
Route::post('/v1/user', 'UserController@insertUser');
Route::get('/v1/user', 'UserController@getUserList');
// Route::get('/v1/user/{userId}', 'UserController@getUserById');
// Route::put('/v1/user/{userId}', 'UserController@updateUserById');
// Route::delete('/v1/user/delete/{userId}', 'UserController@deleteUserById');
