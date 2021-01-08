<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Rou
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'CinemaController@index')->name('cinema');
Route::get('nowplaying', 'CinemaController@nowplaying')->name('nowplaying');
Route::get('upcoming', 'CinemaController@upcoming')->name('upcoming');
Route::get('theaters', 'CinemaController@theaters')->name('theaters');
Route::get('detailmovie/{id}', 'CinemaController@detailmovie')->name('detailmovie');
Route::get('seet', 'CinemaController@seet')->name('seet');
Route::get('receipt', 'CinemaController@receipt')->name('receipt');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('admin', 'AdminController@admin')->name('admin');
Route::get('datamovie', 'AdminController@datamovie')->name('datamovie');
Route::get('datamovie/add', 'AdminController@add')->name('add');
Route::post('datamovie', 'AdminController@addprocess')->name('addprocess');
Route::get('datamovie/edit/{id}', 'AdminController@edit')->name('edit');
Route::patch('datamovie/{id}', 'AdminController@editProcess')->name('editprocess');
Route::delete('datamovie/{id}', 'AdminController@delete')->name('delete');