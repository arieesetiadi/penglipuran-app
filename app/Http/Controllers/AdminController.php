<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
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

    // Halaman News
    public function news()
    {
        // Ambil semua data News, untuk ditampilkan pada table
        $data['news'] = DB::table('news')
            ->join('users', 'users.id', '=', 'news.user_id')
            ->orderBy('id', 'desc')
            ->select('news.*', 'users.name')
            ->get();

        return view('admin.news', $data);
    }

    // Fungsi tambah News
    public function tambahNews(Request $request)
    {
        // Ambil data dari form
        $title = $request->title;
        $content = $request->content;
        $image = $request->image;
        $imageName = time() . ' ' . strtolower($image->getClientOriginalName());

        // Proses upload gambar
        $image->move(public_path('admin/img/news'), $imageName);

        // Insert data ke database News
        DB::table('news')->insert([
            'user_id' => auth()->user()->id,
            'title' => $title,
            'image' => $imageName,
            'content' => $content,
            'created_at' => now()
        ]);

        // Redirect ke halaman News
        return redirect()->to('/kelola-news')->with('status', 'Berhasil menambah news');
    }

    // Halaman Gallery
    public function gallery()
    {
        // Ambil semua data gallery, untuk ditampilkan pada table
        $data['galleries'] = DB::table('galleries')
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.gallery', $data);
    }

    // Fungsi Tambah Gallery
    public function tambahGallery(Request $request)
    {
        // Ambil data dari form
        $title = $request->title;
        $image = $request->image;
        $imageName = time() . ' ' . strtolower($image->getClientOriginalName());

        // Proses upload gambar
        $image->move(public_path('admin/img/gallery'), $imageName);

        // Masukan data ke database Galleries
        DB::table('galleries')->insert([
            'title' => $title,
            'image' => $imageName,
            'created_at' => now()
        ]);

        // Redirect ke halaman Gallery
        return redirect()->to('/kelola-gallery')->with('status', 'Berhasil menambah gambar baru');
    }

    // Fungsi Hapus Gallery
    public function hapusGallery($id)
    {
        // Cari data yang ingin dihapus
        $gallery = DB::table('galleries')->where('id', $id);

        // Hapus gambar dari gallery
        File::delete(public_path('admin\img\gallery\\') . $gallery->get()[0]->image);

        // Hapus data gallery dari database Gallery
        $gallery->delete();

        // Redirect ke halaman Gallery
        return redirect()->to('/kelola-gallery')->with('status', 'Berhasil menghapus gambar');
    }

    // Halaman Admin
    public function admin()
    {
        // Ambil semua data admin, untuk ditampilkan pada table
        $data['admins'] = DB::table('users')->orderBy('id', 'desc')->get();

        return view('admin.admin', $data);
    }

    // Fungsi Tambah Admin
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
