<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Pelajaran;
use App\Materi;
use App\Komponenmateri;

class GuruController extends Controller
{
	public function index()
	{
		$guru=Auth::guard('guru')->user()->id;
        $data=Pelajaran::where('id_guru', $guru)->get();

		return view('guru.dashboard-guru', compact('data'));
	}

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

	public function Detail_Kelas($id)
	{
		$data=Pelajaran::where('id',$id)->get();
        $materi = Materi::with('komponen.materi')->orderBy('id','desc')->get();
        
        
        
		return view('guru.kelas-guru', compact('data','materi'));
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

	public function Guru_RekapNilai()
	{
		return view('guru.rekapnilai-guru');
	}
}
