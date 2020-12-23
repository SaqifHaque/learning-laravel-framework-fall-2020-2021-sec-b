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
Route::post('/logout','logoutController@index');
Route::group(['middleware'=>['sess']], function(){

    Route::get('/employee','employeeController@Employee')->name('emp.empdash');
    Route::get('/addjob','employeeController@Job')->name('emp.addjob');
    Route::post('/addjob','employeeController@addJob');
    Route::get('/job-list','employeeController@viewJobs')->name('emp.jobs');
    Route::get('/job-list/search','employeeController@searchJobs')->name('job.search');
    Route::post('job/delete/{job}','employeeController@destroy');
    Route::get('job/edit/{job}','employeeController@edit');
    Route::post('job/update/{job}','employeeController@update');
        Route::group(['middleware'=>['type']], function(){
            Route::get('/admin','adminController@Admin')->name('admin.admindash');
            Route::get('/employee-list','adminController@viewEmployee')->name('admin.emplist');
            Route::get('/employee-list/search','adminController@searchEmployee')->name('admin.search');
            Route::post('/delete/{user}','adminController@destroy');
            Route::get('/edit/{user}','adminController@edit');
            Route::post('/update/{user}','adminController@update');

            Route::get('/addemployee','adminController@addEmp')->name('admin.addEmp');
            Route::post('/addemployee','adminController@createEmp');
    });

});

