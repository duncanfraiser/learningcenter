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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index');
Route::resource('/home', 'HomeController');
Route::resource('/about', 'AboutController');
Route::resource('/admission', 'AdmissionController');
Route::resource('/curriculum', 'CurriculumController');
Route::resource('/photos', 'PhotoController');
Route::resource('/meals', 'MealController');
Route::resource('/news', 'NewsController');
Route::resource('/calendar', 'CalendarController');
Route::resource('/handbook', 'HandbookController');

Route::resource('/employment', 'EmploymentController');
Route::get('/employment/{id}/thanks', 'EmploymentController@thanks');

Route::resource('/give', 'GiveController');
