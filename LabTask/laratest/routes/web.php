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

Route::get('/login','loginController@Login')->name('login.login');
Route::post('/login', 'loginController@ValidateLogin');
Route::get('/registration','registrationController@Registration')->name('login.registration');
Route::post('/registration','registrationController@Register');
Route::group(['middleware'=>['sess']], function(){
Route::get('/admin','adminController@Admin')->name('admin.admindash');
Route::get('/employee','employeeController@Employee')->name('emp.empdash');
});

