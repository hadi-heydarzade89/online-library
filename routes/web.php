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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/dashboard','StudentProfileController@index');
//Route::get('/student/register','StudentAuthController@register')->name('student.register');
//Route::post('/student/register','StudentAuthController@store')->name('student.store');
//Route::get('/student/update','StudentAuthController@edit')->name('student.edit');
//Route::post('/student/update','StudentAuthController@update')->name('student.update');
//Route::get('/student/delete/{id}','StudentAuthController@delete')->name('student.delete');

//Route::middleware(["auth","student"],function(){
//Route::get('/student/profile', 'Student\StudentProfileController@getId')->name('student.get.id')->middleware(["auth", "student"]);
//});

Route::group(['namespace' => 'Student', 'middleware' => ['web', 'student'], 'prefix' => 'student'], function () {
    Route::get('/profile', 'StudentProfileController@getId')->name('student.profile');
});
Route::group(['namespace' => 'Admin', 'middleware' => ['web', 'admin'], 'prefix' => 'admin'], function () {
    Route::get('/profile', 'AdminProfileController@getProfile')->name('admin.profile');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/books', 'BookController');
    Route::resource('/authors', 'AuthorController');
});
Route::group(['namespace' => 'Book', 'middleware' => ['web'], 'prefix' => 'book'], function () {
    Route::get('/', 'BookController@index')->name('book.index');
});
Route::group(['namespace' => 'Booking', 'middleware' => ['web', 'student'], 'prefix' => 'booking'], function () {
    Route::resource('/', 'BookingController');
});
