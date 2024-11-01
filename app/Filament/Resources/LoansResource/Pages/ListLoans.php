<?php

namespace App\Filament\Resources\LoansResource\Pages;

use App\Filament\Resources\LoansResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLoans extends ListRecords
{
    protected static string $resource = LoansResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\Action::make('cetak_laporan')
                ->label('Cetak Laporan')
                ->icon('heroicon-o-printer')
                ->action(fn() => static::cetakLaporan())
                ->requiresConfirmation()
                ->modalHeading('Laporan Peminjaman')
                ->modalSubheading('Apakah Anda ingin mencetak laporan peminjaman?'),
        ];
    }
    public static function cetakLaporan()
    {
        $data = \App\Models\Loans::all();
        $pdf = \PDF::loadView('Laporan.printLoans', ['data' => $data]);
        return response()->streamDownload(fn() => print($pdf->output()), 'laporan-pinjam.pdf');
    }
}
