<?php

use App\Livewire\{
    Dashboard,
    History,
    EditHistory,
    TambahTransaksi,
    Notes,
    EditCatatan,
    TambahCatatan,
    Profile
};

use App\Livewire\Auth\{Login, Register};
use App\Livewire\Admin\{DaftarUser, DetailUser, EditUser};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});

Route::middleware('auth')->group(function () {
    Route::get('/', Dashboard::class)->name('home');
    Route::get('/history', History::class)->name('history');
    Route::get('/history/{transaksi}', EditHistory::class)->name('edit-history');
    Route::get('/create', TambahTransaksi::class)->name('create');
    Route::get('/notes', Notes::class)->name('notes');
    Route::get('/notes/detail/{catatan}', EditCatatan::class)->name('edit-note');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/notes/create-note', TambahCatatan::class)->name('create-note');
    Route::get('/users-list', DaftarUser::class)->name('daftar-user');
    Route::get('/users-list/detail', DetailUser::class)->name('detail-user');
    Route::get('/users-list/detail/edit', EditUser::class)->name('edit-user');
});