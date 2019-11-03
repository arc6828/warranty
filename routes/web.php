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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth'])->group(function () {
    Route::resource('hardware', 'HardwareController');
    Route::resource('energy-usage', 'EnergyUsageController');




});





Route::resource('duration', 'DurationController');

Route::resource('schedule', 'ScheduleController');


Route::get('/pdf_3-1', 'TestController@index');


