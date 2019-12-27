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

Route::resource('sumpdf', 'SumpdfController');
Route::resource('table_a', 'Table_aController');
Route::resource('table_b', 'Table_bController');
Route::resource('table_c', 'Table_cController');
Route::resource('duration', 'DurationController');
Route::resource('schedule', 'ScheduleController');
Route::resource('table_f', 'Table_fController');

Route::get('sumpdf/{id}/pdf', 'SumpdfController@pdf');

Route::get('/pdf_1-1', 'ExampleController@index');
Route::get('/pdf_2-1', 'Ex_cController@index');
Route::get('/pdf_3-1', 'TestController@index');
Route::get('/pdf_4-1', 'Pdf_fController@index');


Route::resource('branch', 'BranchController');
Route::resource('buildings', 'BuildingsController');
Route::resource('building', 'BuildingController');


Route::get('energy/form1', function(){
    return view('energy/form1');
});

Route::get('energy/form2', function(){
    return view('energy/form2');
});

Route::get('energy/form3', function(){
    return view('energy/form3');
});
Route::resource('energy-production-diagram', 'EnergyProductionDiagramController');
Route::resource('energy-production-consumption', 'EnergyProductionConsumptionController');
Route::resource('energy-machine-evaluation', 'EnergyMachineEvaluationController');
Route::resource('energy-machine', 'EnergyMachineController');
Route::resource('energy-production', 'EnergyProductionController');
Route::resource('energy-production-operation', 'EnergyProductionOperationController');
Route::resource('energy-electricity-transformer', 'EnergyElectricityTransformerController');
Route::resource('energy-consumption-electricity', 'EnergyConsumptionElectricityController');
Route::resource('energy-consumption-heat', 'EnergyConsumptionHeatController');
Route::resource('energy-heat-generator', 'EnergyHeatGeneratorController');
Route::resource('energy-portion-heat', 'EnergyPortionHeatController');
Route::resource('energy-portion-electricity', 'EnergyPortionElectricityController');
Route::resource('enery-report', 'EneryReportController');
Route::resource('enery-committee', 'EneryCommitteeController');
Route::resource('enery-factory-information', 'EneryFactoryInformationController');
Route::resource('energy-organization-chart', 'EnergyOrganizationChartController');
Route::resource('energy-evaluation', 'EnergyEvaluationController');
Route::resource('energy-conservation-policy', 'EnergyConservationPolicyController');