<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelajaran;
use App\Relation;
use App\Materi;
use App\Tugaskelas;
use Auth;

class SiswaController extends Controller
{
    public function index(){
        $siswa=Relation::where('id_siswa', Auth::guard('siswa')->user()->id)->value('id_pelajaran');
        $kelas=Pelajaran::where('id',$siswa)->get();
        return view('siswa.dashboard-siswa', compact('kelas'));
    }

    public function Detail_Kelas($id)
    {
        $data=Pelajaran::where('id',$id)->get();
        $materi = Materi::with('komponen.materi')->where('id_pelajaran', $id)->orderBy('id','desc')->get();

        return view('siswa.kelas-siswa',compact('data','materi'));
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

    public function Siswa_Tugas($id)
    {
        $data=Tugaskelas::where('id_pelajaran',$id)->get();
    	return view('siswa.tugas-siswa', compact('data'));
    }

    public function Siswa_Tugas_detail($id)
    {
         $data=Tugaskelas::where('id',$id)->get();
    	return view('siswa.tugas-siswa-detail',compact('data'));
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
