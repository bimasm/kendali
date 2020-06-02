<?php

Route::get('/', function () {
	return view('welcome');
})->name('welcome');

// hanya untuk tamu yg belum auth
Route::get('/login', 'LoginController@getLogin')->middleware('guest');
Route::post('/login', 'LoginController@postLogin');
Route::post('/regis', 'LoginController@register')->name('regis');

Route::get('/logout', 'LoginController@logout');

Route::get('/admin', function() {
	return view('admin');
})->middleware('auth:admin');

//-- START ----------------------------------------------------------------------------- Siswa
Route::get('/siswa', 'SiswaController@index')
->name('SiswaDashboard')->middleware('auth:siswa');

Route::post('/siswa/join', 'SiswaActionController@join')
->name('JoinKelasSiswa')->middleware('auth:siswa');

Route::get('/siswa/kelas/{id}', 'SiswaController@Detail_Kelas')
->name('DetailKelasSiswa')->middleware('auth:siswa');

Route::get('/siswa/ujian', 'SiswaController@Siswa_ujian')
->name('SiswaUjian')->middleware('auth:siswa');

Route::get('/siswa/diskusi', 'SiswaController@Siswa_Diskusi')
->name('SiswaDiskusi')->middleware('auth:siswa');

Route::get('/siswa/diskusi/detail', 'SiswaController@Siswa_Diskusi_detail')
->name('SiswaDiskusiDetail')->middleware('auth:siswa');

Route::get('/siswa/tugas/{id}', 'SiswaController@Siswa_Tugas')
->name('SiswaTugas')->middleware('auth:siswa');

Route::get('/siswa/tugas/detail/{id}', 'SiswaController@Siswa_Tugas_detail')
->name('SiswaTugasDetail')->middleware('auth:siswa');

Route::get('/siswa/tugas-ujian', 'SiswaController@Siswa_Semua_TugasUjian')
->name('SiswaTugasUjianSemua')->middleware('auth:siswa');

Route::get('/siswa/rekap-nilai', 'SiswaController@Siswa_RekapNilai')
->name('SiswaRekapNilai')->middleware('auth:siswa');

Route::get('/siswa/setting', 'SiswaController@Siswa_Setting')
->name('SiswaSetting')->middleware('auth:siswa');

//-- END ----------------------------------------------------------------------------- Siswa

//-- START ----------------------------------------------------------------------------- Admin Sekolah

Route::get('/adminsekolah', 'AdminSekolahController@index')
->name('AdminSekolahDashboard')->middleware('auth:adminsekolah');

Route::get('/adminsekolah/kelas', 'AdminSekolahController@Kelas_Admin_Sekolah')
->name('AdminSekolahKelas')->middleware('auth:adminsekolah');

//-- START --------------------------------------------------------- Detail Kelas
Route::get('/adminsekolah/kelas/detail-kelas-materi', 'AdminSekolahController@DetailKelas_Materi_Admin_Sekolah')
->name('AdminSekolahDetailKelasMateri')->middleware('auth:adminsekolah');

Route::get('/adminsekolah/kelas/detail-kelas-tugas', 'AdminSekolahController@DetailKelas_Tugas_Admin_Sekolah')
->name('AdminSekolahDetailKelasTugas')->middleware('auth:adminsekolah');

Route::get('/adminsekolah/kelas/detail-kelas-ujian', 'AdminSekolahController@DetailKelas_Ujian_Admin_Sekolah')
->name('AdminSekolahDetailKelasUjian')->middleware('auth:adminsekolah');

Route::get('/adminsekolah/kelas/detail-kelas-diskusi', 'AdminSekolahController@DetailKelas_Diskusi_Admin_Sekolah')
->name('AdminSekolahDetailKelasDiskusi')->middleware('auth:adminsekolah');

Route::get('/adminsekolah/kelas/detail-kelas-siswa', 'AdminSekolahController@DetailKelas_Siswa_Admin_Sekolah')
->name('AdminSekolahDetailKelasSiswa')->middleware('auth:adminsekolah');

Route::get('/adminsekolah/kelas/detail-kelas-informasi', 'AdminSekolahController@DetailKelas_Informasi_Admin_Sekolah')
->name('AdminSekolahDetailKelasInformasi')->middleware('auth:adminsekolah');

Route::get('/adminsekolah/kelas/detail-kelas-tugas/detail-tugas', 'AdminSekolahController@DetailTugas_Admin_Sekolah')
->name('AdminSekolahDetailTugas')->middleware('auth:adminsekolah');

Route::get('/adminsekolah/kelas/detail-kelas-tugas/detail-ujian', 'AdminSekolahController@DetailUjian_Admin_Sekolah')
->name('AdminSekolahDetailUjian')->middleware('auth:adminsekolah');

Route::get('/adminsekolah/kelas/detail-kelas-tugas/detail-diskusi', 'AdminSekolahController@DetailDiskusi_Admin_Sekolah')
->name('AdminSekolahDetailDiskusi')->middleware('auth:adminsekolah');
//-- END --------------------------------------------------------- Detail Kelas

Route::get('/adminsekolah/guru', 'AdminSekolahController@Guru_Admin_Sekolah')
->name('AdminSekolahGuru')->middleware('auth:adminsekolah');

Route::get('/adminsekolah/siswa', 'AdminSekolahController@Siswa_Admin_Sekolah')
->name('AdminSekolahSiswa')->middleware('auth:adminsekolah');

Route::get('/adminsekolah/tugas', 'AdminSekolahController@Semua_Tugas_Admin_Sekolah')
->name('AdminSekolahSemuaTugas')->middleware('auth:adminsekolah');

Route::get('/adminsekolah/ujian', 'AdminSekolahController@Semua_Ujian_Admin_Sekolah')
->name('AdminSekolahSemuaUjian')->middleware('auth:adminsekolah');

Route::get('/adminsekolah/nilai', 'AdminSekolahController@Nilai_Admin_Sekolah')
->name('AdminSekolahSemuaNilai')->middleware('auth:adminsekolah');

Route::get('/adminsekolah/setting', 'AdminSekolahController@Setting_Admin_Sekolah')
->name('AdminSekolahSemuaSetting')->middleware('auth:adminsekolah');

//-- START ----------------------------------------------------------------------------- Admin Sekolah

//-- START ----------------------------------------------------------------------------- Guru

Route::get('/guru', 'GuruController@index')->middleware('auth:guru')->name('GuruDashboard');

Route::post('/guru/addkelas', 'GuruActionController@addpelajaran')->middleware('auth:guru')->name('addpelajaran');

Route::post('/guru/addmateri', 'GuruActionController@addmateri')->middleware('auth:guru')->name('addmateri');

Route::post('/guru/addfilemateri', 'GuruActionController@addfilemateri')->middleware('auth:guru')->name('addfilemateri');

Route::post('/guru/addtugas', 'GuruActionController@addtugas')->middleware('auth:guru')->name('addtugas');

Route::get('/guru/semua-tugas', 'GuruController@Guru_SemuaTugas')
->name('GuruSemuaTugas')->middleware('auth:guru');

Route::get('/guru/tugas-detail/', 'GuruController@Guru_Tugas_Detail')
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

Route::get('/guru/rekap-nilai', 'GuruController@Guru_RekapNilai')
->name('GuruRekapNilai')->middleware('auth:guru');

Route::get('/guru/rekap-nilai/detail', 'GuruController@Guru_RekapNilai_Detail')
->name('GuruRekapNilaiDetail')->middleware('auth:guru');

Route::get('/guru/setting', 'GuruController@Guru_Setting')
->name('GuruSetting')->middleware('auth:guru');

Route::get('/guru/diskusi/detail/', 'GuruController@Guru_Diskusi_Detail')
->name('GuruDiskusiDetail')->middleware('auth:guru');

//-- END ----------------------------------------------------------------------------- Guru