<?php

use Illuminate\Http\Request;

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
<<<<<<< HEAD
    return $request->user();
=======
    return $request;
>>>>>>> b8da2327ba6e31e5bbb8b2ec5a23c0ab952c5aeb
});
