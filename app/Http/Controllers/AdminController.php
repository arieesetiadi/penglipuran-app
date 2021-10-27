<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
    public function news()
    {
        return view('admin.news');
    }

    // Halaman Dashboard
    public function gallery()
    {
        return view('admin.gallery');
    }

    // Halaman Admin
    public function admin()
    {
        // Ambil semua data admin, untuk ditampilkan pada table
        $data['admins'] = DB::table('users')->orderBy('id', 'desc')->get();

        return view('admin.admin', $data);
    }

    // Tambah Admin
    public function tambahAdmin(Request $data)
    {
        // Ambil data dari form
        $nama = $data->nama;
        $email = $data->email;
        $password = $data->password;
        $jenisKelamin = $data->jenisKelamin;

        // Masukan ke database Users
        DB::table('users')->insert([
            'name' => $nama,
            'email' => $email,
            'password' => Hash::make($password),
            'jenis_kelamin' => $jenisKelamin,
            'created_at' => now()
        ]);

        // Redirect ke halaman Admin
        return redirect()->to('/kelola-admin')->with('status', 'Berhasil menambah data admin');
    }

    // Halaman Ubah Admin
    public function halamanUbahAdmin($id)
    {
        // Ambil semua data admin, untuk ditampilkan pada table
        $data['admins'] = DB::table('users')->orderBy('id', 'desc')->get();

        // Ambil data admin yang dipilih
        $data['admin'] = DB::table('users')->find($id);

        return view('admin.ubah-admin', $data);
    }

    // Ubah Admin
    public function ubahAdmin(Request $data)
    {
        // Ambil data dari form
        $id = $data->id;
        $nama = $data->nama;
        $email = $data->email;
        $password = $data->password;
        $jenisKelamin = $data->jenisKelamin;

        // Jika password kosong, jangan update password
        if (is_null($password)) {
            DB::table('users')
                ->where('id', $id)
                ->update([
                    'name' => $nama,
                    'email' => $email,
                    'jenis_kelamin' => $jenisKelamin
                ]);
        }

        // Jika password diisi, update password
        else {
            DB::table('users')
                ->where('id', $id)
                ->update([
                    'name' => $nama,
                    'email' => $email,
                    'password' => Hash::make($password),
                    'jenis_kelamin' => $jenisKelamin
                ]);
        }

        // Redirect ke halaman Admin
        return redirect()->to('/kelola-admin')->with('status', 'Berhasil mengubah data admin');
    }

    // Hapus Admin

    public function hapusAdmin($id)
    {
        // Hapus admin berdasarkan id
        DB::table('users')
            ->where('id', $id)
            ->delete();

        // Redirect ke halaman Admin
        return redirect()->to('/kelola-admin')->with('status', 'Berhasil menghapus data admin');
    }
}
