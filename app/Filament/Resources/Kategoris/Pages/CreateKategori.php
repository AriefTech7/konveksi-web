<?php
namespace App\Filament\Resources\Kategoris\Pages;

use App\Filament\Resources\Kategoris\KategoriResource;
use Filament\Resources\Pages\CreateRecord;

class CreateKategori extends CreateRecord
{
    protected static string $resource = KategoriResource::class;
    protected static ?string $title = 'Buat Kategori';
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
