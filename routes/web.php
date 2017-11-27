<?php
Route::get('/', function () {
    return view('layouts/master/');
});

Route::get('/ajisetyo', 'ajisetyoController@index');
Route::get('/ajisetyo/{id}', 'ajisetyoController@show');
Route::get('coba1', function () {
  return view('ajisetyo/coba1');
});
Route::get('coba2', function () {
  return view('ajisetyo/coba2');
});

Route::get('template', function () {
return view('ajisetyo/coba1');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->group(function() {
Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
