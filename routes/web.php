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

Auth::routes();

Route::group(['middleware' => 'logAuth'], function(){
    Route::get('/profile/', 'UserController@profile')->name("profile");
    Route::get('/profile/{slug}', 'UserController@index')->name("profileDetail");
    Route::get('/status', 'TransactionController@index')->name("status");
});

Route::group(['middleware' => 'role:USER'], function(){
    Route::post('/statusWithdraw', 'TransactionController@statusWithdraw')->name("statusWithdraw");
    Route::post('/job/detail', 'TransactionController@jobDetailPost')->name("jobDetailPost");
});

Route::group(['middleware' => 'role:COMPANY'], function(){
    Route::post('/statusAccept', 'TransactionController@statusAccept');
    Route::post('/statusReject', 'TransactionController@statusReject');
    Route::get('/job/update/{slug}', 'JobController@jobUpdate')->name("jobUpdate");
    Route::post('/job/update', 'JobController@jobUpdatePost')->name("jobUpdatePost");
    Route::get('/job/add', 'JobController@jobAdd')->name("jobAdd");
    Route::post('/job/add', 'JobController@jobAddPost')->name("jobAddPost");
});

Route::get('/', 'JobController@index')->name("home");
Route::get('/job', 'JobController@job')->name("job");
Route::get('/job/detail/{slug}', 'JobController@jobDetail')->name("jobDetail");










