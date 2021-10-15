<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function prosesLogout()
    {
        // Lakukan proses logout
        Auth::logout();

        // Pindah ke halaman Login
        return redirect()->to('login');
    }
}
