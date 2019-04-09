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


Route::get('/', 'HomeController@index');
Route::post('/finished/{user}', 'HomeController@finished');
Route::post('/volunteered/{user}', 'HomeController@volunteered');
Route::post('/skipped/{user}', 'HomeController@skipped');
Route::post('/cancel/{user}', 'HomeController@cancel');