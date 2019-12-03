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
Route::post('/dashboard', 'EventController@store')->name('event.store');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
Route::get('/archives', 'ArchivesController@index')->name('archives.index');
Route::get('/search', 'ArchivesController@search')->name('archives.search');
Route::get('/concert', 'EventController@index')->name('concert.index');