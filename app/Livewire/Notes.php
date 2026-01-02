<?php

namespace App\Livewire;

use App\Models\Catatan;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class Notes extends Component
{

    

    public function render()
    {
        return view('livewire.notes', [
            'notes' => Catatan::where('user_id', Auth::id())->orderByDesc('created_at')->get(),
        ]);
    }
}
