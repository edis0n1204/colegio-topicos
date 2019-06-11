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
Route::resource('parents', 'ParentController');
Route::resource('courses', 'CourseController');
Route::get('licencia/{id}', 'CourseController@licencia')->name('licencia');
Route::get('guardar_asistencia', 'CourseController@guardar_asistencia')->name('guardar_asistencia');
Route::resource('matters', 'MatterController');