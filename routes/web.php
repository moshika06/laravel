<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;


Route::resource('/', \App\Http\Controllers\HomeController::class);
Route::get('/detail/{blog}', [\App\Http\Controllers\HomeController::class, 'show'])->name('home.blog.detail');
// Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('home.detail');



// GET, POST, PUT, PATCH, DELETE
// GET : HANYA MEMBACA/MELIHAT TIDAK ADA ACTION REQUEST KE FORM
// POST : REQUEST KE DALAM SERVER MENGGUNAKAN FORM
// PUT : REQUEST KE DALAM SERVER MENGGUNAKAN FORM, PUT DI PERUNTUKKAN UNTUK UPDATE DAN DATANYA BANYAK (MISAL ADA 3 KOLOM MAKA UPDATE UNTUK SEMUA KOLOM)
// PATCH : REQUEST KE DALAM SERVER MENGGUNAKAN FORM, PATCH DI PERUNTUKKAN UNTUK UPDATE DAN HANYA SATU DATA (MISAL ADA 3 KOLOM MAKA YANG DI UPDATE HANYA 1 KOLOM)
// DELETE : REQUEST KE DALAM SERVER MENGGUNAKAN FORM DELETE

Route::get('belajar-laravel', [\App\Http\Controllers\BelajarController::class, 'index']);

// PENJUMLAHAN
Route::get('penjumlahan', [\App\Http\Controllers\BelajarController::class, 'tambah'])->name('penjumlahan');
Route::post('store-tambah', [\App\Http\Controllers\BelajarController::class, 'storeTambah'])->name('store-tambah');
// PENGURANGAN
Route::get('pengurangan', [\App\Http\Controllers\BelajarController::class, 'kurang'])->name('pengurangan');
Route::post('store-kurang', [\App\Http\Controllers\BelajarController::class, 'storeKurang'])->name('store-kurang');
// PERKALIAN
Route::get('perkalian', [\App\Http\Controllers\BelajarController::class, 'kali'])->name('perkalian');
Route::post('store-kali', [\App\Http\Controllers\BelajarController::class, 'storeKali'])->name('store-kali');
// PEMBAGIAN
Route::get('pembagian', [\App\Http\Controllers\BelajarController::class, 'bagi'])->name('pembagian');
Route::post('store-bagi', [\App\Http\Controllers\BelajarController::class, 'storeBagi'])->name('store-bagi');


// PREFIX --> AWALAN
Route::get('login', [\App\Http\Controllers\LoginController::class, 'login']);
Route::post('action-login', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');

Route::prefix('admin')->group(function () {
    Route::resource('/dashboard', \App\Http\Controllers\Admin\DashboardController::class);
});

//Input Data
Route::get('input', [\App\Http\Controllers\LoginController::class, 'input'])->name('input');

//Register
Route::get('register', [\App\Http\Controllers\RegisterController::class, 'register'])->name('register');
Route::post('register/action', [\App\Http\Controllers\RegisterController::class, 'actionRegister'])->name('register/action');


//Admin
route::middleware(['auth'])->group(function () {
    //Dashboard
    Route::get('admin/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    //Student
    Route::get('admin/student', [\App\Http\Controllers\Admin\StudentController::class, 'index'])->name('student');
    Route::post('/admin/student/simpan', [App\Http\Controllers\Admin\StudentController::class, 'simpan']);
    Route::post('/admin/student/update/{id}', [App\Http\Controllers\Admin\StudentController::class, 'update']);
    Route::get('/admin/student/hapus/{id}', [App\Http\Controllers\Admin\StudentController::class, 'hapus']);
});

//Prefix admin
Route::get('login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('action-login', [App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');
//Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('admin')->group(function () {
    //Dashboard
    Route::resource('dashboard', \App\Http\Controllers\Admin\DashboardController::class);
    // Contact
    Route::resource('/contact', \App\Http\Controllers\Admin\ContactController::class);
    // Blog
    Route::resource('/blog', \App\Http\Controllers\Admin\BlogController::class);
    Route::get('/blog/create/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'create']);
    Route::get('/blog/edit/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'edit']);
    // Route::get('/blog/hapus/{id}', [\App\Http\Controllers\Admin\BlogController::class, 'hapus']);

    //Student
    Route::get('student', [\App\Http\Controllers\Admin\StudentController::class, 'index'])->name('student');
    Route::post('/student/simpan', [App\Http\Controllers\Admin\StudentController::class, 'simpan']);
    Route::post('/student/update/{id}', [App\Http\Controllers\Admin\StudentController::class, 'update']);
    Route::get('/student/hapus/{id}', [App\Http\Controllers\Admin\StudentController::class, 'hapus']);
    //User
    Route::resource('/user', \App\Http\Controllers\Admin\UserController::class);
    Route::get('/user/create/{id}', [\App\Http\Controllers\Admin\UserController::class, 'create']);
    Route::get('/user/edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit']);
    Route::get('/user/hapus/{id}', [\App\Http\Controllers\Admin\UserController::class, 'hapus']);
    //Mata Pelajaran
    Route::resource('/mata_pelajaran', \App\Http\Controllers\Admin\MataPelajaranController::class);
    Route::post('/mata_pelajaran/simpan/', [\App\Http\Controllers\Admin\MataPelajaranController::class, 'simpan']);
    Route::post('/mata_pelajaran/update/{id}', [\App\Http\Controllers\Admin\MataPelajaranController::class, 'update']);
    Route::get('/mata_pelajaran/hapus/{id}', [\App\Http\Controllers\Admin\MataPelajaranController::class, 'hapus']);
});
