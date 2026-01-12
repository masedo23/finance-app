<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ForgotPassword extends Component
{

    #[Validate('required|email:dns')]
    public $email;

    public function sendResetLink() {
        $this->validate();

        $status = Password::sendResetLink(['email' => $this->email]);

        if($status === Password::RESET_LINK_SENT) {
            session()->flash('message', 'Password reset link sent to your email!');
            $this->email = '';
        }
    }

    public function render()
    {
        return view('livewire.auth.forgot-password');
    }
}
