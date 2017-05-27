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

Route::get('', function () {
    return view('index');
});

Route::get('/videos', function () {
    return view('videos');
});

Route::get('/submit', function () {
    return view('submit');
});

Route::post('/insert', 'VideoInsertController@insert');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('videos','VideoViewController@index');

Route::get('byvotes','VideoViewController@byvotes');

Route::get('byrandom','VideoViewController@byrandom');

Route::get('/','VideoUpdateController@index');

Route::get('vote/{id}','VideoUpdateController@vote');
