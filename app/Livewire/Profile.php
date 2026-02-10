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

        // hapus avatar lama (yang tersimpan di public/uploads/...)
        if ($user->avatar && !Str::startsWith($user->avatar, 'http')) {
            $oldPath = public_path($user->avatar); // ex: public/uploads/avatars/xxx.png
            if (file_exists($oldPath)) {
                @unlink($oldPath);
            }
        }

        $filename = time() . '.' . $this->avatar->getClientOriginalExtension();

        // simpan langsung ke public/uploads/avatars
        $this->avatar->storeAs('avatars', $filename, 'public_uploads');

        // simpan path untuk dipakai di <img src="">
        $user->update([
            'avatar' => 'uploads/avatars/' . $filename,
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
