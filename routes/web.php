<?php

use Illuminate\Support\Facades\Route;
use App\Mail\TestEmail;

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
Route::get('/country', 'App\Http\Controllers\UserController@getNationality');
Route::get('/age', 'App\Http\Controllers\UserController@getAge');
Route::get('/sendemail','App\Http\Controllers\UserController@sendEmail');

