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

Route::get('/', 'JobController@index')->name("home");

Route::get('/job', function () {
    return view('job');
});

Route::get('/status', function () {
    return view('status');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/job/detail', function () {
    return view('job-detail');
});

Route::get('/job/add', function () {
    return view('job-add');
});

Route::get('/job/update', function () {
    return view('job-update');
});
