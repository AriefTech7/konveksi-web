<?php
namespace App\Filament\Resources\Kategoris\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
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
                    ->square()
                    ->visibility('public')
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
