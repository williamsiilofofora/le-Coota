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

use Illuminate\Auth\Events\Logout;

Route::get('/', 'AccueilController@index')->name('accueil.index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/store-Event', 'EventController@store')->name('event.store');
Route::get('/create-Event', 'EventController@create')->name('event.create');
Route::get('/edit-Event/{id}', 'EventController@edit')->name('event.edit');
Route::put('/update-Event/{id}', 'EventController@update')->name('event.update');
Route::get('/delete-Event/{id}', 'EventController@destroy')->name('event.destroy');

Route::post('/store-Cadeau', 'CadeauController@store')->name('cadeau.store');
Route::get('/create-Cadeau', 'CadeauController@create')->name('cadeau.create');
Route::get('/edit-Cadeau/{id}', 'CadeauController@edit')->name('cadeau.edit');
Route::put('/update-Cadeau/{id}', 'CadeauController@update')->name('cadeau.update');
Route::get('/delete-Cadeau/{id}', 'CadeauController@destroy')->name('cadeau.destroy');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
Route::get('/archives', 'ArchivesController@index')->name('archives.index');
Route::get('/search', 'ArchivesController@search')->name('archives.search');
Route::get('/concert', 'EventController@index')->name('concert.index');
Route::get('/rgpd', 'RGPDController@index')->name('rgpd.index');