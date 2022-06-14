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
// Layouts
Route::get('/', 'PageController@index')->name('app');

// Partials
Route::get('/header', 'PartialsController@partials')->name('header');
Route::get('/footer', 'PartialsController@partials')->name('footer');

// Components
Route::get('/', 'ViaggioController@content')->name('main');


