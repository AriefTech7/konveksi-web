<?php

namespace App\Filament\Resources\KatalogBahans\Pages;

use App\Filament\Resources\KatalogBahans\KatalogBahanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKatalogBahan extends EditRecord
{
    protected static string $resource = KatalogBahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
