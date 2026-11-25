<?php

namespace App\Filament\Resources\KatalogBahans\Pages;

use App\Filament\Resources\KatalogBahans\KatalogBahanResource;
use Filament\Resources\Pages\CreateRecord;

class CreateKatalogBahan extends CreateRecord
{
    protected static string $resource = KatalogBahanResource::class;

    protected static ?string $title = 'Buat Katalog Bahan';

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getFormActions(): array
    {
        return [
            $this->getCreateFormAction()
                ->label('Buat Katalog Bahan')
                ->icon('heroicon-o-check')
                ->color('success'),

            $this->getCancelFormAction()
                ->label('Batal')
                ->color('danger'),
        ];
    }
}
