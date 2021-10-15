<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function halamanLogin()
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        // Ambil data Username dari form login
        $username = $request->input('username');

        // Ambil data Password dari form login
        $password = $request->input('password');

        // Lakukan proses login
        $login = Auth::attempt([
            'username' => $username,
            'password' => $password
        ]);

        // Periksa apakah login berhasil
        if ($login == true) {
            return redirect()->to('dashboard');
        } else {
            return redirect()->back()->with('gagal', 'Username atau Password Salah');
        }
    }
}
