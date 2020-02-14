<?php

Route::get('/', function () {
	return view('welcome');
})->name('welcome');

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

//-- START ----------------------------------------------------------------------------- Guru

Route::get('/guru', 'GuruController@index')->middleware('auth:guru')->name('GuruDashboard');

Route::post('/guru/addkelas', 'GuruActionController@addpelajaran')->middleware('auth:guru')->name('addpelajaran');

Route::post('/guru/addmateri', 'GuruActionController@addmateri')->middleware('auth:guru')->name('addmateri');

Route::post('/guru/addfilemateri', 'GuruActionController@addfilemateri')->middleware('auth:guru')->name('addfilemateri');

Route::get('/guru/semua-tugas', 'GuruController@Guru_SemuaTugas')
->name('GuruSemuaTugas')->middleware('auth:guru');

Route::get('/guru/tugas-detail', 'GuruController@Guru_Tugas_Detail')
->name('GuruTugasDetail')->middleware('auth:guru');

Route::get('/guru/semua-ujian', 'GuruController@Guru_SemuaUjian')
->name('GuruSemuaUjian')->middleware('auth:guru');


Route::get('/guru/kelas/detail/{id}', 'GuruController@Detail_Kelas')
->name('DetailKelas')->middleware('auth:guru');


Route::get('/guru/tugas/kelas/{id}', 'GuruController@Guru_Tugas')
->name('TugasKelas')->middleware('auth:guru');

Route::get('/guru/ujian/kelas/{id}', 'GuruController@Guru_Ujian')
->name('UjianKelas')->middleware('auth:guru');


Route::get('/guru/diskusi/kelas/{id}', 'GuruController@Guru_Diskusi')
->name('DiskusiKelas')->middleware('auth:guru');

Route::get('/guru/siswa/kelas/{id}', 'GuruController@Guru_Siswa')
->name('SiswaKelas')->middleware('auth:guru');

//-- END ----------------------------------------------------------------------------- Guru