<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{

	public function Guru_SemuaTugas()
	{
		return view('guru.semuatugas-guru');
	}
    
    public function Guru_Tugas_Detail()
	{
		return view('guru.tugas-guru-detail');
	}

	public function Guru_SemuaUjian()
	{
		return view('guru.semuaujian-guru');
	}

	public function Guru_Kelas()
	{
		return view('guru.kelas-guru');
	}

	public function Guru_Tugas()
	{
		return view('guru.tugas-guru');
	}

	public function Guru_Ujian()
	{
		return view('guru.ujian-guru');
	}

	public function Guru_Diskusi()
	{
		return view('guru.diskusi-guru');
	}

	public function Guru_Siswa()
	{
		return view('guru.siswa-guru');
	}
}
