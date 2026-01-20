<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Register extends Component
{

    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';
    public $agree = false;

    protected function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|string|email:dns|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'agree' => 'accepted',
        ];
    }

    public function register()
    {

        $this->validate();

        $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);

        Auth::login($user);

        $user->sendEmailVerificationNotification();

        $this->redirectRoute('verification.notice');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
