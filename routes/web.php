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
Route::resource('/company','companyController');
Route::resource('/role','RoleController');
Route::resource('/contact','contactController');

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return '<h1> Contact </h1>' ;
});
Auth::routes();
Route::get('/contact','contactController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', 'userController@index')->name('users');
Route::get('/users/{id}', 'userController@show');
