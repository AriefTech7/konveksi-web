<?php
namespace App\Filament\Resources\Katalogs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class KatalogsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Nama Katalog')
                    ->searchable(),
                TextColumn::make('Harga')
                    ->searchable(),
                TextColumn::make('Deskripsi')
                    ->searchable(),
                IconColumn::make('Gambar Katalog')
                    ->boolean(),
                TextColumn::make('Minimum Order')
                    ->searchable(),
                TextColumn::make('Estimasi Produk')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
