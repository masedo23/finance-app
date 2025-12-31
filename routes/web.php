<?php

use App\Livewire\Admin\DaftarUser;
use App\Livewire\Admin\DetailUser;
use App\Livewire\Admin\EditUser;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Dashboard;
use App\Livewire\EditCatatan;
use App\Livewire\EditHistory;
use App\Livewire\History;
use App\Livewire\Notes;
use App\Livewire\Profile;
use App\Livewire\TambahCatatan;
use App\Livewire\TambahTransaksi;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', Login::class)->name('login');

Route::get('/register', Register::class)->name('register');

Route::get('/', Dashboard::class)->name('home');

Route::get('/history', History::class)->name('history');

Route::get('/history/{transaksi}', EditHistory::class)->name('edit-history');

Route::get('/create', TambahTransaksi::class)->name('create');

Route::get('/notes', Notes::class)->name('notes');

Route::get('/notes/detail', EditCatatan::class)->name('edit-note');

Route::get('/profile', Profile::class)->name('profile');

Route::get('/notes/create-note', TambahCatatan::class)->name('create-note');

Route::get('/users-list', DaftarUser::class)->name('daftar-user');

Route::get('/users-list/detail', DetailUser::class)->name('detail-user');

Route::get('/users-list/detail/edit', EditUser::class)->name('edit-user');