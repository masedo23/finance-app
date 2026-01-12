<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{

    use WithFileUploads;

    public $avatar;

    public function saveAvatar()
    {
        $this->validate([
            'avatar' => 'image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $user = Auth::user();

        // hapus avatar lama kalau file lokal
        if ($user->avatar && !Str::startsWith($user->avatar, 'http')) {
            Storage::disk('public')->delete($user->avatar);
        }

        $path = $this->avatar->store('avatars', 'public');

        $user->update([
            'avatar' => $path,
        ]);

        $this->reset('avatar');
    }

    public function cancelAvatar()
    {
        $this->avatar = null;
        $this->resetValidation('avatar');

    }

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
