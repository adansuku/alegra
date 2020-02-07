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




Route::put('worker/{id}', 'WorkerController@update');
//Route::get('/', function () {
//    return view('/home');
//});

Route::get('/', 'DashboardController@index');
Auth::routes();
Route::get('/home', 'DashboardController@index');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

//Deletes buttons no in the same controller
Route::get('/workerdelete/{id}', 'Worker_documentController@destroy');
Route::get('/piadelete/{id}', 'Patient_piaController@destroy');
Route::get('/carerdelete/{id}', 'Patient_carerController@destroy');
Route::get('/servicedelete/{id}', 'Patient_serviceController@destroy');
Route::get('/spapddelete/{id}', 'Patient_spapdController@destroy');
Route::get('/transportdelete/{id}', 'Patient_transportController@destroy');
Route::get('/pastdelete/{id}', 'Patient_pastController@destroy');
Route::get('/medicationdelete/{id}', 'Patient_medicationController@destroy');
Route::get('/deletedocument/{id}', 'Patient_documentController@destroy');

Route::post('addpia/{id}', ['as' => 'pia_seg.create', 'uses' => 'Patient_piaController@pia_seguimiento']);

//Ajax
Route::get('/allpatients', 'PatientController@allPatients');
Route::get('/allworkers', 'WorkerController@allWorkers');

Route::resource('workers', 'WorkerController');
Route::resource('workerDocuments', 'Worker_documentController');
Route::resource('workerLabors', 'Worker_laborController');
Route::resource('workerHistories', 'Worker_historyController');
Route::resource('patients', 'PatientController');
Route::resource('patientInfos', 'Patient_infoController');
Route::resource('patientDiagnostics', 'Patient_diagnosticController');
Route::resource('patientPatologies', 'Patient_patologyController');
Route::resource('patientAllergies', 'Patient_allergyController');
Route::resource('patientCarers', 'Patient_carerController');
Route::resource('patientOthers', 'Patient_otherController');
Route::resource('patientServices', 'Patient_serviceController');
Route::resource('patientHealths', 'Patient_healthController');

Route::resource('patientHistories', 'Patient_historyController');
Route::resource('patientDocuments', 'Patient_documentController');

Route::resource('patientPias', 'Patient_piaController');



Route::resource('patientTransports', 'Patient_transportController');

Route::resource('patientSpapds', 'Patient_spapdController');

Route::resource('patientCarers', 'Patient_carerController');



Route::resource('patientDates', 'Patient_dateController');

Route::resource('patientDoctors', 'Patient_doctorController');

Route::resource('patientPasts', 'Patient_pastController');

Route::resource('patientServicesDates', 'Patient_Services_DateController');
Route::resource('patientMedications', 'Patient_medicationController');

Route::resource('workerTimes', 'Worker_timeController');