<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{

    #[Validate('required|string|min:3|max:255')]
    public $name;

    #[Validate('required|string|email:dns|max:255|unique:users')]
    public $email;

    #[Validate('required|string|min:8|confirmed')]
    public $password;

    public $password_confirmation;

    public function register()
    {

        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        session()->flash('message', 'Registration successful! You can now log in.');

        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
