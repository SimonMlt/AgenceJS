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
Route::get('/habitation/maison', 'HabitationController@habitationMaison')->name('habitationMaison');
Route::get('/habitation/villa', 'HabitationController@habitationVilla')->name('habitationVilla');
Route::get('/habitation/appartement', 'HabitationController@habitationAppartement')->name('habitationAppartement');
Route::get('/habitation/add', 'HabitationController@add')->name('addHabitation');
Route::get('/habitation/details/{slug}', 'HabitationController@details')->name('detailsHabitation');
Route::get('/habitation/reservation/{slug}', 'HabitationController@reservation')->name('reservationHabitation');
Route::post('/habitation', 'HabitationController@store')->name('storeHabitation')->middleware('auth');
Route::get('/habitation/{id}', 'HabitationController@edit')->name('editHabitation');
Route::put('/habitation/{id}', 'HabitationController@update')->name('updateHabitation');
Route::delete('/habitation/{id}', 'HabitationController@remove')->name('deleteHabitation');

/**
 * Routes users
 */
Route::get('/users', 'UserController@index')->name('users');
Route::delete('/users/{id}', 'UserController@remove')->name('deleteUser');

/**
 * Routes réservation
 */
Route::post('/habitation/reservation/{id}', 'ReservationController@storeReservation')->name('storeReservation')->middleware('auth');
Route::get('/reservation', 'ReservationController@adminReservation')->name('adminReservation');


/**
 * Routes categories
 */
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::post('/categories', 'CategoryController@store')->name('storeCategory');
Route::get('/categories/{id}', 'CategoryController@details')->name('detailsCategory');
Route::put('/categories/{id}', 'CategoryController@update')->name('updateCategory');
Route::delete('/categories/{id}', 'CategoryController@remove')->name('deleteCategory');

/**
 * Route contact
 */
Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact', 'ContactController@email')->name('sendMailContact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

