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
        // Hitung jumlah data pengguna
        $data['usersCount'] = DB::table('users')->count();

        // Hitung jumlah data news
        $data['newsCount'] = DB::table('news')->count();

        // Hitung jumlah data galleries
        $data['galleriesCount'] = DB::table('galleries')->count();

        return view('admin.dashboard', $data);
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

    public function halamanTambahNews()
    {
        return view('admin.tambah-news');
    }

    // Fungsi tambah News
    public function tambahNews(Request $data)
    {
        // Ambil data dari form
        $imageName = null;
        $title = $data->title;
        $content = $data->content;
        $image = $data->image;

        // Jika ada gambar yang diupload, maka upload gambar tersebut
        if ($image != null) {
            $imageName = time() . ' ' . strtolower($image->getClientOriginalName());
            // Proses upload gambar
            $image->move('admin/img/news/', $imageName);
        }

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

    // Halaman Ubah News
    public function halamanUbahNews($id)
    {
        // Ambil data News yang dipilih
        $data['news'] = DB::table('news')
            ->join('users', 'users.id', '=', 'news.user_id')
            ->where('news.id', $id)
            ->orderBy('id', 'desc')
            ->select('news.*', 'users.name')
            ->get()[0];

        return view('admin.ubah-news', $data);
    }

    public function ubahNews(Request $data)
    {
        // Ambil data dari form
        $id = $data->id;
        $title = $data->title;
        $content = $data->content;
        $image = $data->image;

        // Jika ada gambar yang diupload, maka upload gambar tersebut
        if ($image != null) {
            // Proses upload gambar
            $imageName = time() . ' ' . strtolower($image->getClientOriginalName());
            $image->move('admin/img/news/', $imageName);

            // Insert data ke database News
            DB::table('news')
                ->where('id', $id)
                ->update([
                    'user_id' => auth()->user()->id,
                    'title' => $title,
                    'image' => $imageName,
                    'content' => $content,
                    'updated_at' => now()
                ]);
        } else {
            // Insert data ke database News
            DB::table('news')
                ->where('id', $id)
                ->update([
                    'user_id' => auth()->user()->id,
                    'title' => $title,
                    'content' => $content,
                    'updated_at' => now()
                ]);
        }

        // Redirect ke halaman News
        return redirect()->to('/kelola-news')->with('status', 'Berhasil mengubah news');
    }

    // Fungsi Hapus News
    public function hapusNews($id)
    {
        // Cari data yang ingin dihapus
        $news = DB::table('news')->where('id', $id);

        // Hapus gambar dari news
        File::delete('admin/img/news/' . $news->get()[0]->image);

        // Hapus data dari database news
        $news->delete();

        // Redirect ke halaman news
        return redirect()->to('/kelola-news')->with('status', 'Berhasil menghapus news');
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
    public function tambahGallery(Request $data)
    {
        // Ambil data dari form
        $title = $data->title;
        $image = $data->image;
        $imageName = time() . ' ' . strtolower($image->getClientOriginalName());

        // Proses upload gambar
        $image->move('admin/img/gallery/', $imageName);

        // Masukan data ke database Galleries
        DB::table('galleries')->insert([
            'title' => $title,
            'image' => $imageName,
            'created_at' => now()
        ]);

        // Redirect ke halaman Gallery
        return redirect()->to('/kelola-gallery')->with('status', 'Berhasil menambah gambar baru');
    }

    // Halaman Ubah Admin
    public function halamanUbahGallery($id)
    {
        // Ambil data gallery yang dipilih
        $data['gallery'] = DB::table('galleries')
            ->where('id', $id)
            ->get()[0];

        // Ambil semua data admin, untuk ditampilkan pada table
        $data['galleries'] = DB::table('galleries')
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.ubah-gallery', $data);
    }

    // Ubah Admin
    public function ubahGallery(Request $data)
    {
        // Ambil data dari form
        $id = $data->id;
        $title = $data->title;
        $image = $data->image;

        // Jika ada perubahan gambar, maka lakukan proses upload gambar
        if ($image != null) {
            // Proses upload gambar
            $imageName = time() . ' ' . strtolower($image->getClientOriginalName());
            $image->move('admin/img/gallery/', $imageName);

            // Insert data ke database galleries
            DB::table('galleries')
                ->where('id', $id)
                ->update([
                    'title' => $title,
                    'image' => $imageName,
                    'updated_at' => now()
                ]);
        } else {
            // Insert data ke database galleries
            DB::table('galleries')
                ->where('id', $id)
                ->update([
                    'title' => $title,
                    'updated_at' => now()
                ]);
        }

        // Redirect ke halaman gallery
        return redirect()->to('/kelola-gallery')->with('status', 'Berhasil mengubah data gallery');
    }

    // Fungsi Hapus Gallery
    public function hapusGallery($id)
    {
        // Cari data yang ingin dihapus
        $gallery = DB::table('galleries')->where('id', $id);

        // Hapus gambar dari gallery
        File::delete('admin/img/gallery/' . $gallery->get()[0]->image);

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
        $username = $data->username;
        $email = $data->email;
        $password = $data->password;
        $jenisKelamin = $data->jenisKelamin;

        // Masukan ke database Users
        DB::table('users')->insert([
            'name' => $nama,
            'username' => $username,
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
        $username = $data->username;
        $email = $data->email;
        $password = $data->password;
        $jenisKelamin = $data->jenisKelamin;

        // Jika password kosong, jangan update password
        if (is_null($password)) {
            DB::table('users')
                ->where('id', $id)
                ->update([
                    'name' => $nama,
                    'username' => $username,
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
                    'username' => $username,
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
