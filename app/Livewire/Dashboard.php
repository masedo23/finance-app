<?php

namespace App\Livewire;

use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{

    public function formatNumber($number)
    {
        return number_format($number, 0, ',', '.');
    }

    public function goBack()
    {
        return redirect(url()->previous());
    }
    
    public function render()
    {

        $income = $this->formatNumber(Transaksi::where('type', 'income')->sum('amount'));
        $expensetotal = $this->formatNumber(Transaksi::whereIn('type', ['expense', 'receivable', 'payable'])->sum('amount'));
        $expense = Transaksi::whereIn('type', ['expense','payable'])->sum('amount');
        $balance = Transaksi::where('type', 'income')->sum('amount');
        $totalBalance = $balance - $expense;

        $transactions = Transaksi::whereIn('type', ['receivable', 'payable'])
            ->orderBy('created_at', 'desc')->get();

        return view('livewire.dashboard', [
            'user' => Auth::user(),
            'income' => $income,
            'expensetotal' => $expensetotal,
            'totalBalance' => $this->formatNumber($totalBalance),
            'transactions' => $transactions,
        ]);
    }
}
