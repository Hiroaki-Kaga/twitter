<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/timeline', 'Auth\TimelineController@showTimelinePage')->middleware("auth"); // <--- 追加
Route::post('/timeline', 'Auth\TimelineController@postTweet')->middleware("auth");   // <--- 追加
