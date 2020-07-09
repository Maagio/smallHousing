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
//Auth::routes(['verify' => true]);
//Auth::routes();
//Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
//Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
//Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::get("/", "HomeController@Index");
Route::post("/", "HomeController@Login");
Route::match(["get", "post"], "/createUser", "HomeController@CreateUser");
//Route::get("/createUser", "HomeController@CreateUser");
//Route::post("/createUser", "HomeController@CreateUser");
Route::match(["get", "post"], "/createHouse", "HouseController@CreateHouse");
Route::match(["get", "post"], "/houseOverview", "HouseController@HouseOverview");
Route::get("/home", "HouseController@Logout");
Route::get("/welcome", "HouseController@BackToWelcome");
Route::get("/viewHouse", "HouseController@ViewHouse");
