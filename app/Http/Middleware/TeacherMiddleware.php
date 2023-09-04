<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TeacherMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // // Periksa apakah pengguna telah login
        // if (!auth()->check()) {
        //     return redirect('/login');
        // }

        // // Periksa peran pengguna
        // $role_id = auth()->user()->role_id;
        
        // // Cek peran pengguna dan arahkan ke tampilan yang sesuai
        // switch ($role_id) {
        //     case 1:
        //         // Admin - arahkan ke dashboard admin
        //         return redirect('/admin-dashboard');
        //         break;
        //     case 2:
        //         // Guru - arahkan ke dashboard guru
        //         return redirect('/guru-dashboard');
        //         break;
        //     case 3:
        //         // Siswa - arahkan ke dashboard siswa
        //         return redirect('/siswa-dashboard');
        //         break;
        //    // Tidak ada peran yang valid, tampilkan pesan kesalahan.
        // }
    }
}
