<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Validasi
    public function __construct()
    {
        // Hanya bisa masuk jika sudah login
        $this->middleware('auth');
    }

    // Halaman Dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // Halaman Dashboard
    public function post()
    {
        return view('admin.post');
    }

    // Halaman Dashboard
    public function gallery()
    {
        return view('admin.gallery');
    }

    // Halaman Dashboard
    public function admin()
    {
        return view('admin.admin');
    }
}
