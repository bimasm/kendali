<?php

namespace App\Http\Controllers;
use App\Relation;
use App\Pelajaran;
use Auth;
use Illuminate\Http\Request;

class SiswaActionController extends Controller
{
    public function join(Request $request)
  {
  		// dd($request->input('kode'));
    	$pelajaran=Pelajaran::where('kode', $request->input('kode'))->value('id');

    	if ($pelajaran) {
    		$x=new Relation();
    		$x->id_pelajaran=Pelajaran::where('kode', $request->input('kode'))->value('id');
    		$x->id_siswa=Auth::guard('siswa')->user()->id;
    		$x->save();
    		return redirect('/siswa');
    	}else{
    		print_r('kelas tidak ada');
    		return redirect('/siswa');
    	}
        
        
        
  }
}