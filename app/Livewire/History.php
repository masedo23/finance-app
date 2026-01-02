<?php

namespace App\Livewire;

use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class History extends Component
{
    public $search = '';
    public $filter = 'all';

   

    public function search($query)
    {
        if ($this->search) {
            $query->whereAny( ['amount', 'title', 'note'], 'like', '%' . $this->search . '%');
        }
    }

    public function filter($query)
    {
        if ($this->filter !== 'all') {
            $query->where('type', $this->filter);
        }
    }

    public function render()
    {
        $query = Transaksi::where('user_id', Auth::id());

        $this->search($query);
        $this->filter($query);

        return view('livewire.history', [
            'transactions' => $query->orderByDesc('created_at')->get()
        ]);
    }
}
