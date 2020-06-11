<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', 'StaticPageController@index')->name('staticPage.index');
Route::get('/privacy', 'StaticPageController@privacy')->name('staticPage.privacy');
Route::get('/faq', 'StaticPageController@faq')->name('staticPage.faq');

// students
Route::get('/students', 'StudentController@index')->name('student.index');
Route::get('/show/{id}', 'StudentController@show')->name('student.show');
