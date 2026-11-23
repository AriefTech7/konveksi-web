<?php
namespace App\Filament\Resources\Katalogs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class KatalogsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_katalog')
                    ->label('Nama Katalog')
                    ->searchable(),
                TextColumn::make('harga')
                    ->label('Harga')
                    ->searchable(),
                TextColumn::make('deskripsi')
                    ->label('Deskripsi')
                    ->searchable(),
                ImageColumn::make('gambar_katalog')
                    ->disk('public')
                    ->label('Gambar Katalog')
                    ->square()
                    ->visibility('public'),
                TextColumn::make('minimum_order')
                    ->label('Minimum Order')
                    ->searchable(),
                TextColumn::make('estimasi_produk')
                    ->label('Estimasi Produk')
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
