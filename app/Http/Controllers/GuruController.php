<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Pelajaran;
use App\Materi;
use App\Komponenmateri;
use App\Tugaskelas;
use App\Jawabantugas;

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

	public function Guru_Tugas_Detail($id)
	{
		$data=Pelajaran::where('id',$id)->get();
		$tugas=Tugaskelas::where('id',$id)->get();
		$jawaban=Jawabantugas::where('id',$id)->get();

		return view('guru.tugas-guru-detail', compact('data','tugas','jawaban'));
	}

	public function Guru_SemuaUjian()
	{
		return view('guru.semuaujian-guru');
	}
 
	public function Detail_Kelas($id)
	{
		$data=Pelajaran::where('id',$id)->get();
		$materi = Materi::with('komponen.materi')->where('id_pelajaran', $id)->orderBy('id','desc')->get();

// 		$to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', '2020-3-15 20:02:00');
// $from = \Carbon\Carbon::now();
// $diff_in_days = $to->diffInDays($from);
// print_r($diff_in_days);
// if ($to>$from) {
// 	echo "done";
// 	print_r($from);
// }else{
// 	echo "done late";
// 	print_r($from);
// }

		return view('guru.kelas-guru', compact('data','materi'));
	}
	
	

	public function Guru_Tugas($id)
	{
		$data=Pelajaran::where('id',$id)->get();
		$tugas=Tugaskelas::where('id_pelajaran',$id)->get();

		return view('guru.tugas-guru', compact('data','tugas'));
	}


	public function Guru_Ujian($id)
	{
		$data=Pelajaran::where('id',$id)->get();
		return view('guru.ujian-guru', compact('data'));
	}

	public function Guru_Diskusi($id)
	{
		$data=Pelajaran::where('id',$id)->get();
		return view('guru.diskusi-guru', compact('data'));
	}

	public function Guru_Siswa($id)
	{
		$data=Pelajaran::where('id',$id)->get();
		return view('guru.siswa-guru', compact('data'));
	}

	public function Guru_RekapNilai()
	{
		return view('guru.rekapnilai-guru');
	}

	public function Guru_RekapNilai_Detail()
	{
		return view('guru.rekapnilai-detail-guru');
	}

	public function Guru_Setting()
	{
		return view('guru.setting-guru');
	}

	public function Guru_Diskusi_Detail()
	{
		$data=Pelajaran::all();
		return view('guru.diskusi-guru-detail', compact('data'));
	}
}
