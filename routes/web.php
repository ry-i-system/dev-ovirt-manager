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

// Go Welcome
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Change Languages
Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);

// Go Home
Route::get('/home', 'HomeController@index')->name('home');

// Go Servers
Route::get('/servers', 'ServerController@index')->name('servers');
