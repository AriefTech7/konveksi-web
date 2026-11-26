<?php

namespace App\Filament\Resources\Kategoris\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Actions\Action;
class KategorisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_kategori')
                    ->label('Nama Kategori')
                    ->searchable(),
                TextColumn::make('deskripsi_kategori')
                    ->label('Deskripsi Kategori')
                    ->searchable(),
                ImageColumn::make('gambar_kategori')
                    ->disk('public')
                    ->label('Gambar Kategori')
                    ->visibility('public'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()
                    ->label('Edit')
                    ->modal()
                    ->modalHeading('Edit Kategori')
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
