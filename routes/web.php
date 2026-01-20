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
};

use App\Livewire\Auth\{ForgotPassword, Login, Register, ResetPassword, VerifyEmail};
use App\Livewire\Admin\{DaftarUser, DetailUser};
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');
    Route::get('/reset-password/{token}', ResetPassword::class)->name('password.reset');
    Route::get('/register', Register::class)->name('register');
    Route::get('auth/google', [GoogleController::class, 'redirect'])->name('google.login');
    Route::get('auth/google/callback', [GoogleController::class, 'callback']);
});

// halaman "cek email kamu"
Route::get('/email/verify', VerifyEmail::class)->middleware('auth')->name('verification.notice');

// link yg diklik dari email
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect()->route('home');
})->middleware(['auth', 'signed'])->name('verification.verify');

// resend email verifikasi
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('status', 'verification-link-sent');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::middleware('auth', 'verified')->group(function () {
    Route::get('/', Dashboard::class)->name('home');
    Route::get('/history', History::class)->name('history');
    Route::get('/history/{transaksi}', EditHistory::class)->name('edit-history');
    Route::get('/create', TambahTransaksi::class)->name('create');
    Route::get('/notes', Notes::class)->name('notes');
    Route::get('/notes/detail/{catatan}', EditCatatan::class)->name('edit-note');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/notes/create-note', TambahCatatan::class)->name('create-note');
});

Route::middleware('auth', 'verified')->prefix('users-list')->name('users.')->can('viewAny', User::class)->group(function () {
    Route::get('/', DaftarUser::class)->name('index');
    Route::get('/detail/{user}', DetailUser::class)->name('detail');
});

Route::get('/terms', KebijakanPrivasi::class)->name('terms');

