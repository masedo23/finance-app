<?php

use App\Http\Controllers\GoogleController;
use App\Livewire\{
    Dashboard, 
    History, 
    EditHistory, 
    TambahTransaksi, 
    Notes, 
    EditCatatan,
    KebijakanPrivasi,
    TambahCatatan, 
    Profile,
    TentangAplikasi
};

use App\Livewire\Auth\{Login, Register};
use App\Livewire\Admin\{DaftarUser, DetailUser, EditUser};
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
    Route::get('auth/google', [GoogleController::class, 'redirect'])->name('google.login');
    Route::get('auth/google/callback', [GoogleController::class, 'callback']);
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
});

Route::middleware('auth')->prefix('users-list')->name('users.')->can('viewAny', User::class)->group(function () {
    Route::get('/', DaftarUser::class)->name('index');
    Route::get('/detail/{user}', DetailUser::class)->name('detail');
});

Route::get('/about', TentangAplikasi::class)->name('about');

Route::get('/terms', KebijakanPrivasi::class)->name('terms');

