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

Route::get('/','App\Http\Controllers\FormController@index')->name('multi-step-form');

Route::get('/complete','App\Http\Controllers\FormController@finalFormPage')->name('final-form-page');

Route::post('/upload', 'App\Http\Controllers\FormController@store')->name('upload');




Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/dash_user','App\Http\Controllers\HomeController@dashUser')->name('dash_user');

Route::get('/dash_admin','App\Http\Controllers\HomeController@dashAdmin')->name('dash_admin');

Route::get('/dash_admin/search/', 'App\Http\Controllers\HomeController@searchUser')->name('searchWordUser');

Route::get('/dash_user/search/', 'App\Http\Controllers\HomeController@searchForm')->name('searchWordForm');

Route::get('/dash_user/form/{id}', 'App\Http\Controllers\HomeController@editForm')->name('edit_form');

//Route::put('/dash_user/form/{form}', 'FormController@updateForm')->name('updateForm');

Route::put('/dash_admin/{id}', 'App\Http\Controllers\HomeController@updateStatusUser')->name('status_user');

Route::put('/dash_admin/admin/{id}', 'App\Http\Controllers\HomeController@updateAdminUser')->name('status_user_admin');

Route::delete('/dash_admin/delete/{id}', 'App\Http\Controllers\HomeController@deleteUser')->name('status_user_delete');

Route::put('/dash_user/form_status/{id}', 'App\Http\Controllers\HomeController@updateStatusForm')->name('status_form');





