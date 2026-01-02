<?php

namespace App\Livewire;

use App\Models\Catatan;
use Livewire\Component;

class EditCatatan extends Component
{

    public Catatan $catatan;

    public function hapusCatatan()
    {
        $this->catatan->delete();
        session()->flash('message', 'Catatan deleted successfully.');
        $this->redirectRoute('notes');
    }

    public function render()
    {
        return view('livewire.edit-catatan');
    }
}
