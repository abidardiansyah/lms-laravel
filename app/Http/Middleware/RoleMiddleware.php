<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
     public function handle(Request $request, Closure $next)
    {
        // Periksa apakah pengguna telah terotentikasi
        if (!Auth::check()) {
            return redirect('/login');
        }

        // Periksa peran pengguna
        $role = strtolower(auth()->user()->role);

        // Cek peran pengguna dan arahkan ke tampilan yang sesuai
        switch ($role) {
            case 'admin':
                // Admin - arahkan ke dashboard admin
                return redirect('/admin-dashboard');
                break;
            case 'teacher':
                // Guru - arahkan ke dashboard guru
                return redirect('/guru-dashboard');
                break;
            case 'student':
                // Siswa - arahkan ke dashboard siswa
                return redirect('/siswa-dashboard');
                break;
            default:
                // Tidak ada peran yang valid, tampilkan pesan kesalahan.
                return abort(404); // Ubah ke 404 Not Found jika peran tidak dikenali.
        }
    }
}
