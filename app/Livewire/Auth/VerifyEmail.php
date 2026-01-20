<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Component;

class VerifyEmail extends Component
{
    public int $cooldown = 0;

    protected function redirectIfVerified(): void
    {
        if (Auth::user()->fresh()->hasVerifiedEmail()) {
            $this->redirectRoute('home', navigate: true);
        }
    }

    public function mount(): void
    {
        $this->redirectIfVerified();
        $this->syncCooldown();
    }

    protected function rateLimitKey(): string
    {
        return 'verify-email:' . Auth::id();
    }

    protected function syncCooldown(): void
    {
        $key = $this->rateLimitKey();

        if (!RateLimiter::tooManyAttempts($key, 1)) {
            $this->cooldown = 0;
            return;
        }

        $this->cooldown = RateLimiter::availableIn($key);
    }

    public function resend(): void
    {
        $this->redirectIfVerified();

        $key = $this->rateLimitKey();

        if (RateLimiter::tooManyAttempts($key, 1)) {
            $this->syncCooldown();

            $this->dispatch(
                'toast',
                "Please wait {$this->cooldown}s before resending."
            );

            return;
        }

        RateLimiter::hit($key, 60);

        Auth::user()->sendEmailVerificationNotification();

        $this->cooldown = 60;

        $this->dispatch(
            'toast',
            'Verification email sent. Check your inbox.'
        );
    }

    public function poll(): void
    {
    $this->syncCooldown();
    }


    public function logout(): void
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        $this->redirectRoute('login', navigate: true);
    }

    public function render()
    {
        return view('livewire.auth.verify-email');
    }
}
