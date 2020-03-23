<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use App\Sekolah;
use App\Siswa;
use Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
  public function getLogin()
  {
    $sd=Sekolah::where('jenjang','SD')->get();
    $smp=Sekolah::where('jenjang','SMP')->get();
    $sma=Sekolah::where('jenjang','SMA')->get();

    return view('login',compact('sd','smp','sma'));
  }

  public function postLogin(Request $request)
  {

    if (Auth::guard('admin')->attempt(['username' => $request->email, 'password' => $request->password])) {
      return redirect()->intended('/admin');

    } else if (Auth::guard('siswa')->attempt(['email' => $request->email, 'password' => $request->password])) {
      return redirect()->intended('/siswa');

    } else if (Auth::guard('adminsekolah')->attempt(['username' => $request->email, 'password' => $request->password])) {
      return redirect()->intended('/adminsekolah');

    } else if (Auth::guard('guru')->attempt(['username' => $request->email, 'password' => $request->password])) {
      return redirect()->intended('/guru');

    } else{
      return redirect('/login');
    }

  }

  public function logout()
  {
    if (Auth::guard('admin')->check()) {
      Auth::guard('admin')->logout();

    } elseif (Auth::guard('siswa')->check()) {
      Auth::guard('siswa')->logout();

    } elseif (Auth::guard('guru')->check()) {
      Auth::guard('guru')->logout();
      
    } elseif (Auth::guard('adminsekolah')->check()) {
      Auth::guard('adminsekolah')->logout();
    }

    return redirect('/login');

  }
  public function register(Request $request){
    $x=new Siswa();
    $x->id_sekolah=$request->input('sekolah');
    $x->nama=$request->input('nama');
    $x->email=$request->input('email');
    $x->password=Hash::make($request->input('password'));
    $x->save();
    return redirect('/login');
  }
}


