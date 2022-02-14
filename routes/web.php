<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about', '\App\Http\Controllers\PagesController@about');
Route::get('/contact', '\App\Http\Controllers\PagesController@contact');
Route::post('/contact/post', '\App\Http\Controllers\PagesController@contactPost');
Route::get('/registration', '\App\Http\Controllers\PagesController@registration');
Route::get('/report', '\App\Http\Controllers\PagesController@report');
Route::post('/report/delete/{email_id}', '\App\Http\Controllers\PagesController@deleteEmail');
Route::get('/report/edit/{email_id}', '\App\Http\Controllers\PagesController@editEmail');
Route::post('/contact/edit/post', '\App\Http\Controllers\PagesController@editEmailPost');
Route::get('/registration', '\App\Http\Controllers\UsersController@registration');
Route::post('/registration/post', '\App\Http\Controllers\UsersController@registrationPost');
Route::get('/registry_report', '\App\Http\Controllers\UsersController@registry_report');
Route::post('/edit_registry_report/delete/{user_id}', '\App\Http\Controllers\UsersController@deleteUsers');
Route::get('/edit_registry_report/edit/{user_id}', '\App\Http\Controllers\UsersController@editUsers');


