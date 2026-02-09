<?php

namespace App\Livewire;

use App\Exports\TransaksiExport;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class Dashboard extends Component
{

    // public function exportExcel() {
    //     $filename = 'transaksi-' . now()->format('Y-m-d_H-i-s') . '.xlsx';

    //     return Excel::download(new TransaksiExport(auth()->id()), $filename);
    // }

    public function exportExcel()
    {
        return Excel::download(
            new TransaksiExport(),
            'laporan-keuangan-' . now()->format('Y-m-d_H-i-s') . '.xlsx'
        );
    }

    public function formatNumber($number)
    {
        return number_format($number, 0, ',', '.');
    }

    public function resetTransactions() {

        Transaksi::where('user_id', Auth::id())->delete();

        session()->flash('message', 'Transaction history deleted.');

        $this->dispatch('transactions-reset');
    }
    
    public function render()
    {
        $userId = Auth::id();

        $income = $this->formatNumber(
            Transaksi::where('user_id', $userId)
                ->where('type', 'income')
                ->sum('amount')
        );

        $expensetotal = $this->formatNumber(
            Transaksi::where('user_id', $userId)
                ->whereIn('type', ['expense', 'receivable', 'payable'])
                ->sum('amount')
        );

        $expense = Transaksi::where('user_id', $userId)
            ->whereIn('type', ['expense', 'payable'])
            ->sum('amount');

        $balance = Transaksi::where('user_id', $userId)
            ->where('type', 'income')
            ->sum('amount');

        $totalBalance = $balance - $expense;

        $transactions = Transaksi::where('user_id', $userId)
            ->whereIn('type', ['receivable', 'payable'])
            ->latest()
            ->get();

        $hasTransactions = Transaksi::where('user_id', $userId)->exists();

        return view('livewire.dashboard', [
            'user' => Auth::user(),
            'income' => $income,
            'expensetotal' => $expensetotal,
            'totalBalance' => $this->formatNumber($totalBalance),
            'transactions' => $transactions,
            'hasTransactions' => $hasTransactions,
        ]);
    }
}  