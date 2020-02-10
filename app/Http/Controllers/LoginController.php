<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use Auth;

class LoginController extends Controller
{
  public function getLogin()
  {
    return view('login');
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
}
