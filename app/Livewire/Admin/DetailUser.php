<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class DetailUser extends Component
{
    public function render()
    {
        return view('livewire.admin.detail-user', [
            'users' => User::all(),
        ]);
    }
}
