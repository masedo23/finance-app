<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class DaftarUser extends Component
{

    public $search = '';

    public function render()
    {
        return view('livewire.admin.daftar-user', [
            'users' => User::where('name', 'like', '%' . $this->search . '%')->orderByDesc('created_at')->get(),
        ]);
    }
}
