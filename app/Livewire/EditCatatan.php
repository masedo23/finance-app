<?php

namespace App\Livewire;

use App\Models\Catatan;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditCatatan extends Component
{
 
    public Catatan $catatan;

    #[Validate('required|string|max:255')]
    public $title;
    #[Validate('nullable|string')]
    public $content;

    public function mount(Catatan $catatan)
    {
        $this->title = $catatan->title;
        $this->content = $catatan->content;
        
    }

    public function editCatatan() {
        $this->validate();

        $this->catatan->update([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        session()->flash('message', 'Note updated successfully.');
        $this->redirectRoute('notes');
    }

    public function hapusCatatan()
    {
        $this->catatan->delete();
        session()->flash('message', 'Note deleted successfully.');
        $this->redirectRoute('notes');
    }

    public function render()
    {
        return view('livewire.edit-catatan', [
            'catatan' => $this->catatan,
        ]);
    }
}
