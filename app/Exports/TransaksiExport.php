<?php

namespace App\Exports;

use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Alignment;


class TransaksiExport implements FromCollection, WithMapping, WithStyles, ShouldAutoSize, WithCustomStartCell, WithEvents
{
    protected ?Carbon $start = null;
    protected ?Carbon $end = null;
    protected int $totalAmount = 0;

    public function __construct()
    {
        $range = Transaksi::where('user_id', Auth::id())
            ->selectRaw('MIN(created_at) as start, MAX(created_at) as end')
            ->first();

        $this->start = $range?->start ? Carbon::parse($range->start)->locale('id') : null;
        $this->end   = $range?->end   ? Carbon::parse($range->end)->locale('id')   : null;

        // total jumlah transaksi user login
        $this->totalAmount = Transaksi::where('user_id', Auth::id())->sum('amount');
    }

    public function collection()
    {
        return Transaksi::where('user_id', Auth::id())
            ->orderBy('created_at', 'asc')
            ->get();
    }

    public function startCell(): string
    {
        return 'A5';
    }

    public function map($row): array
    {
        return [
            Carbon::parse($row->created_at)->locale('id')->translatedFormat('l, d F Y'),
            strtoupper($row->type),
            (int) $row->amount,
            (string) $row->title,
            $row->note ? (string) $row->note : '-',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        // ====== Judul & Periode ======
        $sheet->mergeCells('A1:E1');
        $sheet->mergeCells('A2:E2');

        $sheet->setCellValue('A1', 'LAPORAN KEUANGAN PERIODE');

        $periode = ($this->start && $this->end)
            ? $this->start->translatedFormat('d F Y') . ' - ' . $this->end->translatedFormat('d F Y')
            : '-';

        $sheet->setCellValue('A2', $periode);

        $sheet->getStyle('A1:A2')->applyFromArray([
            'font' => ['bold' => true, 'size' => 16],
            'alignment' => ['horizontal' => 'center', 'vertical' => 'center'],
        ]);

        $sheet->getRowDimension(1)->setRowHeight(28);
        $sheet->getRowDimension(2)->setRowHeight(24);

        // ====== Header Tabel ======
        $sheet->setCellValue('A4', 'Hari/Tanggal');
        $sheet->setCellValue('B4', 'Jenis Transaksi');
        $sheet->setCellValue('C4', 'Jumlah');
        $sheet->setCellValue('D4', 'Judul');
        $sheet->setCellValue('E4', 'Keterangan');

        $sheet->getStyle('A4:E4')->applyFromArray([
            'font' => [
                'bold' => true,
                'color' => ['rgb' => 'FFFFFF'],
                'size' => 12,
            ],
            'fill' => [
                'fillType' => 'solid',
                'startColor' => ['rgb' => '1F4E79'],
            ],
            'alignment' => [
                'horizontal' => 'center',
                'vertical' => 'center',
            ],
        ]);

        $sheet->getRowDimension(4)->setRowHeight(22);

        // Lebar kolom
        $sheet->getColumnDimension('A')->setWidth(28);

        return [];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {

                $sheet = $event->sheet->getDelegate();

                $lastRow  = $sheet->getHighestRow();
                $totalRow = $lastRow + 1;

                // ===== TOTAL ROW =====
                $sheet->setCellValue("B{$totalRow}", "TOTAL");
                $sheet->setCellValue("C{$totalRow}", $this->totalAmount);

                // ===== BORDER sampai TOTAL =====
                $sheet->getStyle("A4:E{$totalRow}")->applyFromArray([
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => Border::BORDER_THIN,
                            'color' => ['rgb' => 'B0B0B0'],
                        ],
                    ],
                ]);

                // ===== FORMAT ANGKA =====
                if ($totalRow >= 5) {
                    $sheet->getStyle("C5:C{$totalRow}")
                        ->getNumberFormat()
                        ->setFormatCode('#,##0');
                }

                // ===== CENTER untuk DATA SAJA (tanpa baris TOTAL) =====
                $dataLastRow = max(5, $totalRow - 1);
                if ($dataLastRow >= 5) {
                    $sheet->getStyle("A5:B{$dataLastRow}")->applyFromArray([
                        'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER],
                    ]);
                }

                // ===== STYLE TOTAL (RATA KANAN) =====
                $sheet->getStyle("B{$totalRow}:C{$totalRow}")->applyFromArray([
                    'font' => [
                        'bold' => true,
                        'size' => 12,
                    ],
                    'alignment' => [
                        'horizontal' => Alignment::HORIZONTAL_RIGHT,
                        'vertical'   => Alignment::VERTICAL_CENTER,
                    ],
                ]);
            },
        ];
    }
}
