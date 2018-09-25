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
Route::get('/getterm','StudentRecordController@viewStudent');
Route::get('/getterm/get_datatable','StudentRecordController@get_datatable');
Route::resource('/section','ManageSectionController');