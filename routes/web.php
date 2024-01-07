<?php

use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InsidentController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Insident;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PengajuansController;
use App\Models\Pengajuan;
use App\Models\Visitor;

Route::get('/insidentil-pdf', [PdfController::class, 'insidentpdf'])->name('insidentil.pdf');
Route::get('/users-pdf', [PdfController::class, 'userspdf'])->name('users.pdf');
Route::get('/pengajuan-pdf', [PdfController::class, 'pengajuanpdf'])->name('pengajuan.pdf');



// Autentikasi
Auth::routes();

Route::middleware('guest')->get('/', function () {
    // Misalkan halaman home Anda memiliki nama 'home'
    $pageName = 'index';

    // Cek apakah halaman sudah ada di database
    $visitor = Visitor::where('page_name', $pageName)->first();

    if (!$visitor) {
        // Jika halaman belum ada, buat entri baru
        Visitor::create([
            'page_name' => $pageName,
            'visits' => 1,
        ]);
    } else {
        // Jika halaman sudah ada, tambahkan jumlah kunjungan
        $visitor->visits += 1;
        $visitor->save();
    }

    // Tampilkan jumlah pengunjung
    $totalVisits = Visitor::where('page_name', $pageName)->sum('visits');

    $insidents = Insident::all();

    return view('index', compact('insidents'));
});


// Rute Google
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('google.callback');

// Rute untuk Pengguna Biasa
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('home', [PengajuanController::class, 'index']);
    Route::post('home', [PengajuanController::class, 'store'])->name('home.store');
});

// Rute untuk Admin
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

    Route::get('/admin/documents', [InsidentController::class, 'index'])->name('admin.documents');
    Route::post('/store-insident', [InsidentController::class, 'store']);
    Route::post('/edit-insident', [InsidentController::class, 'edit']);
    Route::post('/delete-insident', [InsidentController::class, 'destroy']);

    Route::get('/admin/users', [UserController::class, 'index'])->name('admin.users');

    Route::get('/admin/permohonan', [HomeController::class, 'permohonan'])->name('admin.permohonan');
    Route::patch('/admin/permohonan/{id}/ubah-status', [HomeController::class, 'ubahStatusPermohonan'])->name('admin.ubah_status_permohonan');
    Route::delete('/admin/permohonan/{id}/hapus', [HomeController::class, 'hapusPermohonan'])->name('admin.permohonan.hapus');


    Route::get('/admin/profiles', [HomeController::class, 'profiles'])->name('admin.profiles');
    Route::post('/admin/profiles', [ProfileController::class, 'profileUpdate'])->name('update-name');


    Route::get('/admin/security', [HomeController::class, 'security'])->name('admin.security');
    Route::post('/admin/security', [HomeController::class, 'updatePassword'])->name('update-password');

    Route::get('/profile', [ProfileController::class, 'index'])->name('user.profile');
    Route::post('/profile', [ProfileController::class, 'store'])->name('user.profile.store');
});
