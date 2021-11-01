<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



// =============================================================
// LOGIN
// =============================================================

// Halaman Login
Route::get('/login', [LoginController::class, 'halamanLogin'])->name('login');

// Proses Login
Route::post('/login', [LoginController::class, 'prosesLogin']);

// Proses Logout
Route::get('/logout', [LogoutController::class, 'prosesLogout']);





// =============================================================
// ADMIN
// =============================================================

// Halaman Dashboard
Route::get('/dashboard', [AdminController::class, 'dashboard']);

// Halaman Post
Route::get('/kelola-news', [AdminController::class, 'news']);

// Halaman Gallery
Route::get('/kelola-gallery', [AdminController::class, 'gallery']);
Route::post('/tambah-gallery', [AdminController::class, 'tambahGallery']);
Route::get('/hapus-gallery/{id}', [AdminController::class, 'hapusGallery']);

// Halaman admin
Route::get('/kelola-admin', [AdminController::class, 'admin']);
Route::post('/tambah-admin', [AdminController::class, 'tambahAdmin']);
Route::post('/ubah-admin', [AdminController::class, 'ubahAdmin']);
Route::get('/halaman-ubah-admin/{id}', [AdminController::class, 'halamanUbahAdmin']);
Route::get('/hapus-admin/{id}', [AdminController::class, 'hapusAdmin']);






// =============================================================
// USER
// =============================================================

// Halaman Home
Route::get('/', [UserController::class, 'home']);

// Halaman Virtual Tour
Route::get('/tampil-virtual-tour', [UserController::class, 'virtualTour']);

// Halaman Tentang Kami
Route::get('/tampil-tentang-kami', [UserController::class, 'tentangKami']);

// Halaman Gallery
Route::get('/tampil-gallery', [UserController::class, 'gallery']);

// Halaman Blog
Route::get('/tampil-blog', [UserController::class, 'blog']);

// Halaman Kontak
Route::get('/tampil-kontak', [UserController::class, 'kontak']);
