<?php
namespace App\Filament\Resources\Customers\Pages;

use App\Filament\Resources\Customers\CustomerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\Action;

class ListCustomers extends ListRecords
{
    protected static string $resource = CustomerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Tambahkan Customer Baru')
                ->modalHeading('Tambah Customer Baru')
                ->modal()
                ->modalSubmitAction(

                    fn(Action $action) => $action
                        ->label('Tambah Customer')
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
