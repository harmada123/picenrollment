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
    return view('auth.login');
});

Auth::routes();
//
Route::resource('/register','RegisterStudents');

Route::group(['middleware'=>'payment'],function (){
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
    Route::get('/usersinfo/{id}','ManagementInformationController@updateInfo');



    Route::get('/inactive/get_datatable','ManagementInformationController@inactiveUsers');
    Route::get('/inactive','ManagementInformationController@viewInactive');

    Route::get('/users/{id}','ManagementInformationController@updateCourse');
});

Route::resource('/pupil','ManageStudentController');
Route::get('/usersettings/{id}','ManagementInformationController@userSettings');
Route::get('/studentusersinfo/{id}','ManagementInformationController@userInfo');
Route::resource('/studview','ManagePupilController');


Route::group(['middleware'=>'portal'],function(){
    Route::resource('/portal','ManagePortalController');
    Route::get('getgrades/{id}/get_datatable','ManagePortalController@get_grades');
    Route::get('/grades/get_datatable/','ManagePortalController@get_datatable');
    Route::get('/classroom/{id}','ManagePortalController@getClass');
    Route::get('/classroom/{id}/get_datatable/','ManagePortalController@datatable');
    Route::get('/classroom/getstudents/{id}','ManagePortalController@getStudents');
    Route::get('/makesubject','ManagePortalController@makeSubject');
    Route::resource('subject', 'ManageSubjectController');
});