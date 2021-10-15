<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Halaman Home
    public function home()
    {
        return view('user.home');
    }

    // Halaman Virtual Tour
    public function virtualTour()
    {
        return view('user.virtual-tour');
    }

    // Halaman Tentang Kami
    public function tentangKami()
    {
        return view('user.tentang-kami');
    }

    // Halaman Gallery
    public function gallery()
    {
        return view('user.gallery');
    }

    // Halaman Blog
    public function blog()
    {
        return view('user.blog');
    }

    // Halaman Kontak
    public function kontak()
    {
        return view('user.kontak');
    }
}
