<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ForgotPassword extends Component
{

    #[Validate('required|email:dns')]
    public $email;

    public function sendResetLink()
{
    $this->validate();

    try {
        Password::sendResetLink([
            'email' => $this->email,
        ]);
    } catch (\Throwable $e) {
        // sengaja dikosongkan
        // biar user tetap dapat feedback
    }

    $this->reset('email');

    $this->dispatch('notify', message:
        'If your email is registered, you will receive a password reset link.'
    );
}


    public function render()
    {
        return view('livewire.auth.forgot-password');
    }
}
