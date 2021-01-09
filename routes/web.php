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

Route::get('/job', 'JobController@job')->name("job");

Route::get('/status', 'TransactionController@index')->name("status");

Route::get('/profile/{slug}', 'UserController@index')->name("profile");

Route::get('/job/detail/{slug}', 'JobController@jobDetail')->name("jobDetail");

Route::get('/job/add', 'JobController@jobAdd')->name("jobAdd");

Route::post('/job/add', 'JobController@jobAddPost')->name("jobAddPost");

Route::get('/job/update/{slug}', 'JobController@jobUpdate')->name("jobUpdate");

Route::post('/job/update', 'JobController@jobUpdatePost')->name("jobUpdatePost");
