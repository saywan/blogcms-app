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

Route::get('/', function () {
    return view('landing');
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/auth/login', function () {
    return view('login');
})->name('login');

Route::get('/auth/register', function () {
    return view('register');
})->name('register');

Route::get('/auth/reset-password', function () {
    return view('reset-password');
})->name('reset-pass');

Route::get('/post/{id}', function ($id) {
    //return $id;
    return view('post');
})->name('post.show');
