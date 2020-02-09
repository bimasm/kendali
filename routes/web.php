<?php

Route::get('/', function () {
    return view('welcome');
});

// hanya untuk tamu yg belum auth
Route::get('/login', 'LoginController@getLogin')->middleware('guest');
Route::post('/login', 'LoginController@postLogin');
Route::get('/logout', 'LoginController@logout');

Route::get('/admin', function() {
  return view('admin');
})->middleware('auth:admin');

Route::get('/siswa', function() {
  return view('siswa');
})->middleware('auth:siswa');

Route::get('/adminsekolah', function() {
  return view('adminsekolah');
})->middleware('auth:adminsekolah');

Route::get('/guru', function() {
  return view('guru');
})->middleware('auth:guru');