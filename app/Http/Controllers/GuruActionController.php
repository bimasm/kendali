<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelajaran;
use App\Materi;
use App\Komponenmateri;
use Illuminate\Support\Str;
use Auth;

class GuruActionController extends Controller
{
  public function addpelajaran(Request $request)
  {
  		$sekolah=Auth::guard('guru')->user()->id_sekolah;
  		$guru=Auth::guard('guru')->user()->id;
    	$x = new Pelajaran();
        $x->id_sekolah=$sekolah;
        $x->id_guru=$guru;
        $x->pelajaran=$request->pelajaran;
        $x->kode=Str::random(5);
        // dd($x);
        $x->save();
        return redirect()->route('GuruDashboard');
  }
  public function addmateri(Request $request)
  {
  		
    	$x = new Materi();
        $x->id_pelajaran=$request->id_pelajaran;
        $x->materi=$request->materi;
        
        // dd($x);
        $x->save();
        return redirect('/guru/kelas/detail/'.$request->id_pelajaran);
  }
  public function addfilemateri(Request $request)
  {
  		
    	$x = new Komponenmateri();
        $x->id_materi=$request->id_materi;
        $x->judul=$request->judul;
        $file=$request->file('filemateri');
        if (!$file) {
            return redirect('/guru/kelas/detail/'.$request->id_pelajaran);
        }
        $file_name=$file->getClientOriginalName();
        $path=public_path('/file');
        $file->move($path,$file_name);
        $x->file=$file_name;
        
        
        // dd($x);
        $x->save();
        return redirect('/guru/kelas/detail/'.$request->id_pelajaran);
  }

}
