<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{

    #[Validate('required|email:dns')]
    public $email = '';

    #[Validate('required')]
    public $password = '';

    public function login()
    {
        $this->validate();

        if(Auth::attempt([

            'email' => $this->email, 
            'password' => $this->password])) {

            return redirect()->route('home');
        }

        $this->addError('email', 'Invalid email or password.');

    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
