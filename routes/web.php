<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// GET, POST, PUT, PATCH, DELETE -> rest api
// PUT -> update secara keseluruhan
// PATCH -> update salah satu
// buku {judul, penerbit, penulis}

// route: GET /books
Route::get('/books', [BookController::class, 'index'])
    ->name('books.index');

// route: GET /members
Route::get('/members', function () {
    return 'Daftar Member';
});

// route: GET /loans
Route::get('/loans/{id}', function (int $id) {
    return 'Daftar Peminjaman '.$id;
});
// route: GET /returns
Route::get('/returns', function () {
    return 'Daftar Pengembalian';
});

Route::get('/', function () {
    return view('panel');
});

Route::resource('manga', Controller::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
