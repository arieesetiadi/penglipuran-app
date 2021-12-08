<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // Halaman Home
    public function home()
    {
        return view('user.home');
    }

    // Halaman News
    public function news()
    {
        // Ambil semua data News
        $data['news'] = DB::table('news')
            ->orderBy('id', 'desc')
            ->get();

        return view('user.news', $data);
    }

    // Halaman News
    public function product()
    {
        return view('user.product');
    }

    // Halaman About
    public function about()
    {
        return view('user.about');
    }

    // Halaman Gallery
    public function gallery()
    {
        // Ambil semua data gambar
        $data['galleries'] = DB::table('galleries')->orderBy('id', 'desc')->get();

        return view('user.gallery', $data);
    }

    // Halaman Company Profile
    public function companyProfile()
    {
        return view('user.company-profile');
    }

    // Halaman Virtual Tour
    public function virtualTourFoto()
    {
        return view('user.virtual-tour-foto');
    }

    // Halaman Virtual Tour
    public function virtualTourVideo()
    {
        return view('user.virtual-tour-video');
    }

    // Halaman Contact
    public function contact()
    {
        return view('user.contact');
    }
}
