<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\KelurahanController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('/dashboard')->group(function () {
        Route::get('/', [AdminController::class, 'index']);

        // Auth Kelurahan
        Route::prefix('/kelurahan')->group(function () {
            Route::get('/', [KelurahanController::class, 'index']);
            Route::get('/create', [KelurahanController::class, 'create']);
            Route::post('/store', [KelurahanController::class, 'store']);
            Route::get('/show/{id}', [KelurahanController::class, 'show']);
            Route::get('/edit/{id}', [KelurahanController::class, 'edit']);
            Route::put('/update/{id}', [KelurahanController::class, 'update']);
            Route::delete('/destroy/{id}', [KelurahanController::class, 'destroy']);
        });

        // Auth Pasien
        Route::middleware('admin')->prefix('pasien')->group(function () {
            Route::get('/', [PasienController::class, 'index']);
            Route::get('/create', [PasienController::class, 'create']);
            Route::post('/store', [PasienController::class, 'store']);
            Route::get('/show/{id}', [PasienController::class, 'show']);
            Route::get('/edit/{id}', [PasienController::class, 'edit']);
            Route::put('/update/{id}', [PasienController::class, 'update']);
            Route::delete('/destroy/{id}', [PasienController::class, 'destroy']);
        });
    });
    Route::prefix('contact')->group(function(){
        Route::get('/', [ContactController::class, 'index']);
    });
    Route::prefix('about')->group(function(){
        Route::get('/', [AboutController::class, 'index']);
    });
});


require __DIR__.'/auth.php';

// Route::get('/salam', function () {
//     return "Selamat Belajar Bareng Saya";
// });

// Route::get('/beranda', function () {
//     return "Halaman Beranda";
// });

// Route::get('/profile', function () {
//     return "Halaman Profile";
// });

// Praktikum Laravel 2
// Route::get('/dashboard', [AdminController::class, 'index']);
// Route::get('/contact', [ContactController::class, 'index']);
// Route::get('/about', [AboutController::class, 'index']);

// Praktikum Laravel 3
// Route::get('/dashboard/pasien', [PasienController::class, 'index']);
// Route::get('/dashboard/kelurahan', [KelurahanController::class, 'index']);

// Praktikum Laravel 4
// Route::get('/dashboard/kelurahan/create', [KelurahanController::class, 'create']);
// Route::post('/dashboard/kelurahan/store', [KelurahanController::class, 'store']);
// Route::get('/dashboard/kelurahan/show/{id}', [KelurahanController::class, 'show']);

// Tugas Praktikum Laravel 4
// Route::get('/dashboard/pasien/create', [PasienController::class, 'create']);
// Route::post('/dashboard/pasien/store', [PasienController::class, 'store']);
// Route::get('/dashboard/pasien/show/{id}', [PasienController::class, 'show']);

// Praktikum Laravel 5
// Route::get('/dashboard/kelurahan/edit/{id}', [KelurahanController::class, 'edit']);
// Route::put('/dashboard/kelurahan/update/{id}', [KelurahanController::class, 'update']);
// Route::delete('/dashboard/kelurahan/destroy/{id}', [KelurahanController::class, 'destroy']);

// Route::get('/dashboard/pasien/edit/{id}', [PasienController::class, 'edit']);
// Route::put('/dashboard/pasien/update/{id}', [PasienController::class, 'update']);
// Route::delete('/dashboard/pasien/destroy/{id}', [PasienController::class, 'destroy']);