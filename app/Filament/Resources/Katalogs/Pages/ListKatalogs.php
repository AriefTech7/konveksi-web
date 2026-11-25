<?php

namespace App\Filament\Resources\Katalogs\Pages;

use App\Filament\Resources\Katalogs\KatalogResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKatalogs extends ListRecords
{
    protected static string $resource = KatalogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Buat Katalog'),
        ];
    }
}
