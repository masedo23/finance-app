<?php

namespace App\Livewire;

use App\Models\Catatan;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class TambahCatatan extends Component
{

    #[Validate('required|string|max:255')]
    public $title;

    #[Validate('nullable|string')]
    public $content;


    function tambahCatatan()
    {
        $this->validate();

        Catatan::create([
            'user_id' => Auth::id(),
            'title' => $this->title,
            'content' => $this->content,
        ]);

        session()->flash('message', 'Note added successfully!');

        $this->redirectRoute('notes');
    }

    public function render()
    {
        return view('livewire.tambah-catatan');
    }
}
