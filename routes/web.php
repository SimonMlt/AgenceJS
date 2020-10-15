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

/**
 * Main route
*/
Route::get('/', function () { return view('home'); });

/**
 * Routes habitation
 */
Route::get('/habitation', 'HabitationController@habitation')->name('habitation');
Route::get('/habitation/add', 'HabitationController@add')->name('addHabitation');
Route::get('/habitation/{slug}', 'HabitationController@details')->name('detailsHabitation');
Route::post('/habitation', 'HabitationController@store')->name('storeHabitation')->middleware('auth');
//Route::put('/posts/{id}', 'PostController@update')->name('updatePost');
//Route::delete('/posts/{id}', 'PostController@remove')->name('deletePost');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
