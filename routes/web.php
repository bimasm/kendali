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

//-- START ----------------------------------------------------------------------------- Siswa
Route::get('/siswa', function() {
	return view('siswa.dashboard-siswa');
})->middleware('auth:siswa')->name('SiswaDashboard');

Route::get('/siswa/kelas', 'SiswaController@Siswa_Kelas')
->name('SiswaKelas')->middleware('auth:siswa');

Route::get('/siswa/ujian', 'SiswaController@Siswa_ujian')
->name('SiswaUjian')->middleware('auth:siswa');

Route::get('/siswa/diskusi', 'SiswaController@Siswa_Diskusi')
->name('SiswaDiskusi')->middleware('auth:siswa');

Route::get('/siswa/diskusi/detail', 'SiswaController@Siswa_Diskusi_detail')
->name('SiswaDiskusiDetail')->middleware('auth:siswa');

Route::get('/siswa/tugas', 'SiswaController@Siswa_Tugas')
->name('SiswaTugas')->middleware('auth:siswa');

Route::get('/siswa/tugas/detail', 'SiswaController@Siswa_Tugas_detail')
->name('SiswaTugasDetail')->middleware('auth:siswa');

Route::get('/siswa/tugas-ujian', 'SiswaController@Siswa_Semua_TugasUjian')
->name('SiswaTugasUjianSemua')->middleware('auth:siswa');

Route::get('/siswa/rekap-nilai', 'SiswaController@Siswa_RekapNilai')
->name('SiswaRekapNilai')->middleware('auth:siswa');

Route::get('/siswa/setting', 'SiswaController@Siswa_Setting')
->name('SiswaSetting')->middleware('auth:siswa');

//-- END ----------------------------------------------------------------------------- Siswa

Route::get('/adminsekolah', function() {
	return view('adminsekolah');
})->middleware('auth:adminsekolah');

Route::get('/guru', function() {
	return view('guru');
})->middleware('auth:guru');