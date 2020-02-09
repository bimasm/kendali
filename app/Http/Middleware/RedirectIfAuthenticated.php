<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @param  string|null  $guard
   * @return mixed
   */
  public function handle($request, Closure $next, $guard = null)
  {
    if (Auth::guard('admin')->check()) {

      return redirect('/admin');

    } else if (Auth::guard('siswa')->check()) {

      return redirect('/siswa');
      
    } else if (Auth::guard('guru')->check()) {

      return redirect('/guru');
      
    } else if (Auth::guard('adminsekolah')->check()) {

      return redirect('/adminsekolah');
      
    }

    return $next($request);
  }
}