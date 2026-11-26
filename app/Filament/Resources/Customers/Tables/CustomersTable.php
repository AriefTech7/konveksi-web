<?php
namespace App\Filament\Resources\Customers\Tables;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CustomersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_customer')
                    ->label('Nama Customer')
                    ->searchable(),
                TextColumn::make('nomor_whatsapp')
                    ->label('Nomor Whatsapp')
                    ->searchable(),
                TextColumn::make('alamat')
                    ->label('Alamat')
                    ->searchable(),
                TextColumn::make('kota')
                    ->label('Kota')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()
                    ->label('Edit')
                    ->modal()
                    ->modalHeading('Edit Customer')
                    ->modalSubmitAction(
                        fn(Action $action) => $action
                            ->label('Simpan')
                            ->icon('heroicon-o-check')
                            ->color('success')
                    )
                    ->modalCancelAction(
                        fn(Action $action) => $action
                            ->label('Batal')
                            ->color('danger')
                    ),
                DeleteAction::make()
                    ->label('Hapus'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
