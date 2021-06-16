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
Route::get('/workerdelete/{id}', 'WorkerController@destroy');
Route::get('/workerdocumentdelete/{id}', 'Worker_documentController@destroy');
Route::get('/piadelete/{id}', 'Patient_piaController@destroy');
Route::get('/carerdelete/{id}', 'Patient_carerController@destroy');
Route::get('/servicedelete/{id}', 'Patient_serviceController@destroy');
Route::get('/servicedate_delete/{id}', 'Patient_Services_DateController@destroy');
Route::get('/spapddelete/{id}', 'Patient_spapdController@destroy');
Route::get('/spapddiadelete/{id}', 'Patient_spapd_diaController@destroy');
Route::get('/centrodiadelete/{id}', 'Patient_centro_diaController@destroy');
Route::get('/transportdelete/{id}', 'Patient_transportController@destroy');
Route::get('/pastdelete/{id}', 'Patient_pastController@destroy');
Route::get('/medicationdelete/{id}', 'Patient_medicationController@destroy');

Route::get('/deletediagnostic/{id}', 'Patient_diagnosticController@destroy');
Route::get('/deleteallergy/{id}', 'Patient_allergyController@destroy');
Route::get('/deletepatology/{id}', 'Patient_patologyController@destroy');

Route::get('/deletedocument/{id}', 'Patient_documentController@destroy');
Route::get('/deletedate/{id}', 'Patient_dateController@destroy');

Route::post('addpia/{id}', ['as' => 'pia_seg.create', 'uses' => 'Patient_piaController@pia_seguimiento']);

//Ajax
Route::get('/allpatients', 'PatientController@allPatients');
Route::get('/allworkers', 'WorkerController@allWorkers');
Route::get('/worker_patients', 'WorkerController@patients')->name('worker.patients');;
Route::get('/workerpatients', 'WorkerController@worker_patients');

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
//Route::resource('patientHistory', 'Patient_historyController');
Route::resource('patientOthers', 'Patient_otherController');
Route::resource('patientServices', 'Patient_serviceController');
Route::resource('patientHealths', 'Patient_healthController');

Route::resource('patientHistories', 'Patient_historyController');
Route::resource('patientDocuments', 'Patient_documentController');

Route::resource('patientPias', 'Patient_piaController');



Route::resource('patientTransports', 'Patient_transportController');

Route::resource('patientSpapds', 'Patient_spapdController');
Route::resource('patientSpapdDays', 'Patient_spapd_diaController');

Route::resource('patientSpapdDates', 'Patient_spapd_dateController');

Route::resource('patientCentro', 'Patient_centroController');
Route::resource('patientCentroDays', 'Patient_centro_diaController');


Route::resource('patientDates', 'Patient_dateController');

Route::resource('patientDoctors', 'Patient_doctorController');

Route::resource('patientPasts', 'Patient_pastController');

Route::resource('patientServicesDates', 'Patient_Services_DateController');
Route::resource('patientMedications', 'Patient_medicationController');

Route::resource('workerTimes', 'Worker_timeController');

Route::resource('workerSessions', 'Worker_sessionController');

Route::post('addpia/{id}', ['as' => 'pia_seg.create', 'uses' => 'Patient_piaController@pia_seguimiento']);

Route::post('updatePassword/{id}', ['as' => 'updatePassword.user', 'uses' => 'WorkerController@updatePassword']);

Route::get('/patientHistory/{id}', 'Patient_historyController@get_all_history_by_patient');


Route::get('/private-files/{file?}','FileController@getFile')->where('file', '(.*)');


Route::get('/export-pia/{id}','PdfExportController@piaSimple');