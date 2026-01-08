<?php

namespace App\Livewire;

use App\Models\Transaksi;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EditHistory extends Component
{

    #[Validate('required|in:income,expense,receivable,payable')]
    public $type;

    #[Validate('required|string|max:255')]
    public $title;

    #[Validate('required|integer|min:0')]
    public $amount;

    #[Validate('nullable|string|max:255')]
    public $note;

    public Transaksi $transaksi;

    public $previousUrl;

    public function mount(Transaksi $transaksi)
    {
        $this->type = $transaksi->type;
        $this->title = $transaksi->title;
        $this->amount = $transaksi->amount;
        $this->note = $transaksi->note;

        $this->previousUrl = url()->previous();
    }

    public function preveousPage()
    {
        return redirect()->route('history');
    }

    public function editTransaksi() {

        $this->validate();

        $this->transaksi->update([
            'type' => $this->type,
            'title' => $this->title,
            'amount' => $this->amount,
            'note' => $this->note,
        ]);

        session()->flash('message', 'Transaction updated successfully!');

        $this->redirectRoute('history');
    }
 
    public function deleteHistory()
    {
        $this->transaksi->delete();

        session()->flash('message', 'Transaction deleted successfully.');   

        return redirect($this->previousUrl);

    }

    public function render()
    {
        return view('livewire.edit-history');
    }
}
