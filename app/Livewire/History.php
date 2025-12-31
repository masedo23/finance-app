<?php

namespace App\Livewire;

use App\Models\Transaksi;
use Livewire\Component;

class History extends Component
{
    public function render()
    {
        return view('livewire.history', [
            'transactions' => Transaksi::all()->sortByDesc('created_at'),
        ]);
    }
}
