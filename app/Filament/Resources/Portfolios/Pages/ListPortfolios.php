<?php
namespace App\Filament\Resources\Portfolios\Pages;

use App\Filament\Resources\Portfolios\PortfolioResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\Action;

class ListPortfolios extends ListRecords
{
    protected static string $resource = PortfolioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Tambahkan Portofolio Baru')
                ->modalHeading('Tambah Portofolio Baru')
                ->modal()
                ->modalSubmitAction(

                    fn(Action $action) => $action
                        ->label('Tambah Portofolio')
                        ->icon('heroicon-o-check')
                        ->color('success')
                )
                ->modalCancelAction(
                    fn(Action $action) => $action
                        ->label('Batal')
                        ->color('danger')
                )
                ->createAnother(false),
        ];
    }
}
