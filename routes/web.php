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
Route::get('/test', function () {
    return view('test');
});
Route::resource('table_a', 'Table_aController');
Route::resource('table_b', 'Table_bController');
Route::resource('table_c', 'Table_cController');

Route::get('/pdf_1-1', 'ExampleController@index');

Route::resource('sumpdf', 'SumpdfController');

Route::resource('duration', 'DurationController');
Route::resource('schedule', 'ScheduleController');

Route::get('/pdf_3-1', 'TestController@index');

Route::get('/pdf', 'PDFController@index');
Route::resource('table_c', 'Table_cController');

Route::get('/pdf_2-1', 'Ex_cController@index');