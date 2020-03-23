<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminSekolahController extends Controller
{
    public function index()
    {
    	return view('admin-sekolah.dashboard-admin-sekolah');
    }

    public function Kelas_Admin_Sekolah()
    {
    	return view('admin-sekolah.kelas-admin-sekolah');
    }

    //-- START --------------------------------------------------------- Detail Kelas

    public function DetailKelas_Materi_Admin_Sekolah()
    {
    	return view('admin-sekolah.detail-kelas-materi-admin-sekolah');
    }

    public function DetailKelas_Tugas_Admin_Sekolah()
    {
    	return view('admin-sekolah.detail-kelas-tugas-admin-sekolah');
    }

    public function DetailKelas_Ujian_Admin_Sekolah()
    {
    	return view('admin-sekolah.detail-kelas-ujian-admin-sekolah');
    }

    public function DetailKelas_Diskusi_Admin_Sekolah()
    {
    	return view('admin-sekolah.detail-kelas-diskusi-admin-sekolah');
    }

    public function DetailKelas_Siswa_Admin_Sekolah()
    {
    	return view('admin-sekolah.detail-kelas-siswa-admin-sekolah');
    }

    public function DetailKelas_Informasi_Admin_Sekolah()
    {
    	return view('admin-sekolah.detail-kelas-informasi-admin-sekolah');
    }

    public function DetailTugas_Admin_Sekolah()
    {
    	return view('admin-sekolah.detail-tugas-admin-sekolah');
    }

    public function DetailUjian_Admin_Sekolah()
    {
    	return view('admin-sekolah.detail-ujian-admin-sekolah');
    }

    public function DetailDiskusi_Admin_Sekolah()
    {
    	return view('admin-sekolah.detail-diskusi-admin-sekolah');
    }

    //-- END --------------------------------------------------------- Detail Kelas

    public function Guru_Admin_Sekolah()
    {
    	return view('admin-sekolah.guru-admin-sekolah');
    }

    public function Siswa_Admin_Sekolah()
    {
    	return view('admin-sekolah.siswa-admin-sekolah');
    }

    public function Semua_Tugas_Admin_Sekolah()
    {
    	return view('admin-sekolah.semua-tugas-admin-sekolah');
    }

    public function Semua_Ujian_Admin_Sekolah()
    {
    	return view('admin-sekolah.semua-ujian-admin-sekolah');
    }

    public function Nilai_Admin_Sekolah()
    {
    	return view('admin-sekolah.nilai-admin-sekolah');
    }

    public function Setting_Admin_Sekolah()
    {
    	return view('admin-sekolah.setting-admin-sekolah');
    }
}
