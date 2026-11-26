<?php

namespace App\Filament\Resources\Katalogs\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Actions\Action;
class KatalogsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_katalog')
                    ->label('Nama Katalog')
                    ->searchable(),
                TextColumn::make('kategori_produk.nama_kategori')
                    ->label('Kategori Produk')
                    ->searchable(),
                TextColumn::make('harga')
                    ->label('Harga')
                    ->searchable(),
                TextColumn::make('deskripsi')
                    ->label('Deskripsi')
                    ->searchable(),
                ImageColumn::make('gambar_katalog')
                    ->disk('public')
                    ->label('Gambar')
                    ->alt('Katalog Cosmos')
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
                EditAction::make()
                    ->label('Edit')
                    ->modal()
                    ->modalHeading('Edit Katalog Produk')
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
