<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function Siswa_Kelas()
    {
    	return view('siswa.kelas-siswa');
    }

    public function Siswa_Ujian()
    {
    	return view('siswa.ujian-siswa');
    }

    public function Siswa_Diskusi()
    {
    	return view('siswa.diskusi-siswa');
    }

    public function Siswa_Diskusi_detail()
    {
    	return view('siswa.diskusi-siswa-detail');
    }

    public function Siswa_Tugas()
    {
    	return view('siswa.tugas-siswa');
    }

    public function Siswa_Tugas_detail()
    {
    	return view('siswa.tugas-siswa-detail');
    }

    public function Siswa_Semua_TugasUjian()
    {
    	return view('siswa.tugasujian-siswa-semua');
    }

    public function Siswa_RekapNilai()
    {
    	return view('siswa.rekapnilai-siswa');
    }

    public function Siswa_Setting()
    {
    	return view('siswa.setting-siswa');
    }
}
