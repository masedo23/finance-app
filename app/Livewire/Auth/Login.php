<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

use function Symfony\Component\Clock\now;

class Login extends Component
{

    #[Validate('required|email:dns')]
    public $email = '';

    #[Validate('required')]
    public $password = '';

    public function login() {
        $this->validate();

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            $this->addError('email', 'Email or password is incorrect');
            return;
        }

        Auth::user()->update([
            'last_activity_at' => now(),
        ]);

        $this->redirectRoute('home');
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
