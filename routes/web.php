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



Route::resource('/management','ManagementInformationController');

Route::resource('/student','StudentRecordController');
Route::get('/getstudent','StudentRecordController@viewStudent');
Route::get('/getstudent/get_datatable','StudentRecordController@get_datatable');

Route::resource('/term','ManageTermController');
Route::get('/getterm','ManageTermController@viewTerm');
Route::get('/getterm/get_datatable','ManageTermController@get_datatable');
Route::get('/sections/{id}','ManagePaymentController@totalPayment');
Route::get('/getsections/{id}/datatable','ManagePaymentController@datatable');

Route::resource('/section','ManageSectionController');
Route::get('/getsection','ManageSectionController@viewSection');
Route::get('/getsection/get_datatable','ManageSectionController@get_datatable');

Route::resource('/course','ManageCourseController');
Route::get('/getcourse','ManageCourseController@viewCourse');
Route::get('/getcourse/get_datatable','ManageCourseController@get_datatable');

Route::resource('/payment','ManagePaymentController');
Route::get('getpayments/{id}','ManagePaymentController@getPayments');
Route::get('getpayments/{id}/get_datatable','ManagePaymentController@get_datatable');

Route::get('/settings/{id}','ManagementInformationController@settings');

