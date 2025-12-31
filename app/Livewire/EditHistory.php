<?php

namespace App\Livewire;

use App\Models\Transaksi;
use Livewire\Component;

class EditHistory extends Component
{

    public Transaksi $transaksi;

    public function deleteHistory()
    {
        $this->transaksi->delete();

        session()->flash('message', 'Transaction deleted successfully.');   
        $this->redirectRoute('history');

    }

    public function render()
    {
        return view('livewire.edit-history');
    }
}
