<?php
namespace App\Filament\Resources\KatalogBahans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Actions\Action;
class KatalogBahansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_bahan')
                    ->label('Nama Bahan')
                    ->searchable(),
                TextColumn::make('kualitas_bahan')
                    ->label('Kualitas Bahan')
                    ->searchable(),
                TextColumn::make('deskripsi')
                    ->label('Deskripsi')
                    ->searchable(),
                ImageColumn::make('gambar_bahan')
                    ->disk('public')
                    ->label('Gambar')
                    ->visibility('public'),
                TextColumn::make('status_ketersediaan')
                    ->label('Status Ketersediaan')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()
                    ->label('Edit')
                    ->modal()
                    ->modalHeading('Edit Katalog Bahan')
                    ->modalSubmitAction(
                        fn (Action $action) => $action
                            ->label('Simpan')
                            ->icon('heroicon-o-check')
                            ->color('success')
                    )
                    ->modalCancelAction(
                        fn (Action $action) => $action
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
