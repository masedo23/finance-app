<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{

    public function logout() {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        $this->redirectRoute('login');
    }

    public function render()
    {
        return view('livewire.profile', [
            'user' => Auth::user(),
        ]);
    }
}
