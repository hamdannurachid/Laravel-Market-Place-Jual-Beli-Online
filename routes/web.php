<?php


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'PenggunaController@index')->name('home');



Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('/add-kategori', 'AdminController@kategori')->name('admin.kategori.create');

});
