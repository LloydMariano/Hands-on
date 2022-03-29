<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
 
Route::get('/user/{id}', [UserController::class, 'show']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/{welcome}', 'PageController@page')->name('welcome');
Route::get('/{home}', 'PageController@page')->name('home');