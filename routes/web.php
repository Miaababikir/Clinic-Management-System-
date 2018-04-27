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


Auth::routes();

// App routes
Route::get('/appointments', 'HomeController@appointments')->name('appointments');
Route::get('/doctors', 'HomeController@doctors')->name('doctors');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('appointment', 'Appointments\AppointmentController')->except(['index', 'create', 'edit', 'update']);
Route::get('appointment-code/{code}', 'Appointments\AppointmentController@code')->name('appointment-code');


// Admin panel routes
Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Auth\LoginController@login')->name('admin.login.submit');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', 'ControlPanel\ControlPanelController@index')->name('admin');

    // Doctors Routs
    Route::resource('doctors', 'Doctors\DoctorController');
    Route::resource('appointments', 'ControlPanel\AppointmentController');
    Route::get('doctors/{id}/days', 'Doctors\DoctorController@getDays');
});

