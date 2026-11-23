<?php

namespace App\Filament\Resources\Katalogs\Pages;

use App\Filament\Resources\Katalogs\KatalogResource;
use Filament\Resources\Pages\CreateRecord;

class CreateKatalog extends CreateRecord
{
    protected static string $resource = KatalogResource::class;
    protected static ?string $title = 'Buat Katalog';
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction()
                ->label('Buat Kategori')
                ->icon('heroicon-o-check')
                ->color('success'),

            $this->getCancelFormAction()
                ->label('Batal')
                ->color('danger'),
        ];
    }
}
