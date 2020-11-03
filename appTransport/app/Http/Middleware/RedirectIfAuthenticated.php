<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
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
        switch ($guard) {
            case 'admin':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('admin');
                }
                break;
            case 'qtv':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('qtv');
                }
                break;
            case 'nhanvien':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('nhanvien');
                }
                break;
            case 'quanly':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('quanly');
                }
                break;
            case 'ketoan':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('ketoan');
                }
                break;
            case 'taixe':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('taixe');
                }
                break;
            case 'nvkho':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('nvkho');
                }
                break;
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect('/');
                }
                break;
        }
        return $next($request);
    }
}
