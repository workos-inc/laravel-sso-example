<?php

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function() {
    return view('login', ['authUrl' => (new \WorkOS\SSO())->getAuthorizationUrl('workos-okta.com', 'http://localhost:8000/auth/callback', ["things" => "stuff"], null)]);
});

Route::get('auth/callback', function(Request $request) {
    $code = $request->input("code");
    $profile = (new \WorkOS\SSO())->getProfile($code);
    return response()->json([$profile->toArray()]);
});