<?php

namespace App\Filament\Resources\Katalogs\Pages;

use App\Filament\Resources\Katalogs\KatalogResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKatalog extends EditRecord
{
    protected static string $resource = KatalogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
