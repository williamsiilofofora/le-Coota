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


Route::get('/', 'AccueilController@index')->name('accueil.index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/formCard', 'EventController@store')->name('event.store');
Route::get('/formCard', 'EventController@create')->name('event.create');