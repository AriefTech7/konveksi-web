<?php

namespace App\Filament\Resources\Kategoris\Pages;

use App\Filament\Resources\Kategoris\KategoriResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\Action;
class ListKategoris extends ListRecords
{
    protected static string $resource = KategoriResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Tambah Kategori')
                ->modalHeading('Tambah Kategori Baru')
                ->modal()
                ->modalSubmitAction(

                    fn (Action $action) => $action
                        ->label('Buat Kategori')
                        ->icon('heroicon-o-check')
                        ->color('success')
                )
                ->modalCancelAction(
                    fn (Action $action) => $action
                        ->label('Batal')
                        ->color('danger')
                )
                ->createAnother(false),
        ];
    }
}
