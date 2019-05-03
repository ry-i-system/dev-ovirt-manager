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

// Go Server
Route::get('/servers', 'ServerController@index')->name('servers');

// Go IPadder
Route::get('/ipadders', 'IpadderController@index')->name('ipadders');

// Go Contact
Route::get('/contacts', 'ContactController@index')->name('contacts');

// Go Account
Route::get('/account', 'AccountController@index')->name('accounts');
