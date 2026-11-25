<?php
namespace App\Filament\Resources\KatalogBahans\Pages;

use App\Filament\Resources\KatalogBahans\KatalogBahanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\Action;
class ListKatalogBahans extends ListRecords
{
    protected static string $resource = KatalogBahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Buat Katalog Bahan')
                ->modalHeading('Tambah Katalog Bahan Baru')
                ->modal()
                ->modalSubmitAction(

                    fn (Action $action) => $action
                        ->label('Buat Katalog')
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
