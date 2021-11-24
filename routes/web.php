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
Route::post('/tambah-news', [AdminController::class, 'tambahNews']);
Route::get('/halaman-tambah-news', [AdminController::class, 'halamanTambahNews']);
Route::post('/ubah-news', [AdminController::class, 'ubahNews']);
Route::get('/halaman-ubah-news/{id}', [AdminController::class, 'halamanUbahNews']);
Route::get('/hapus-news/{id}', [AdminController::class, 'hapusNews']);

// Halaman Gallery
Route::get('/kelola-gallery', [AdminController::class, 'gallery']);
Route::post('/tambah-gallery', [AdminController::class, 'tambahGallery']);
Route::post('/ubah-gallery', [AdminController::class, 'ubahGallery']);
Route::get('/halaman-ubah-gallery/{id}', [AdminController::class, 'halamanUbahGallery']);
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

// Halaman News
Route::get('/news', [UserController::class, 'news']);

// Halaman Product
Route::get('/product', [UserController::class, 'product']);

// Halaman About
Route::get('/about', [UserController::class, 'about']);

// Halaman Gallery
Route::get('/gallery', [UserController::class, 'gallery']);

// Halaman Company Profile
Route::get('/company-profile', [UserController::class, 'companyProfile']);

// Halaman Virtual Tour Foto
Route::get('/virtual-tour-foto', [UserController::class, 'virtualTourFoto']);

// Halaman Virtual Tour Video
Route::get('/virtual-tour-video', [UserController::class, 'virtualTourVideo']);

// Halaman Kontak
Route::get('/contact', [UserController::class, 'contact']);
