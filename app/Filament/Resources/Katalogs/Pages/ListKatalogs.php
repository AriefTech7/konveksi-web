<?php

namespace App\Filament\Resources\Katalogs\Pages;

use App\Filament\Resources\Katalogs\KatalogResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\Action;
class ListKatalogs extends ListRecords
{
    protected static string $resource = KatalogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Buat Katalog')
                ->modalHeading('Tambah Katalog Baru')
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
