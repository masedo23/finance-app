<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DetailUser extends Component
{

    public User $user;

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function deleteUser()
    {

        if($this->user->id === Auth::id()) {
            return;
        }

        $this->user->delete();

        session()->flash('message', 'User deleted successfully.');

        $this->redirectRoute('users.index');
    }

    public function render()
    {
        return view('livewire.admin.detail-user');
    }
}
