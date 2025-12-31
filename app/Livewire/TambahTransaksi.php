<?php

namespace App\Livewire;

use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class TambahTransaksi extends Component
{

    #[Validate('required|in:income,expense,receivable,payable')]
    public $type;

    #[Validate('required|string|max:255')]
    public $title;

    #[Validate('required|integer|min:0')]
    public $amount;

    #[Validate('nullable|string|max:255')]
    public $note;

    public function tambahTransaksi()
    {
        $this->validate();

        Transaksi::create([
            'user_id' => Auth::id(),
            'type' => $this->type,
            'title' => $this->title,
            'amount' => $this->amount,
            'note' => $this->note,
        ]);

        session()->flash('message', 'Transaction added successfully!');

        $this->redirectRoute('history');

    }

    public function render()
    {
        return view('livewire.tambah-transaksi');
    }
}
