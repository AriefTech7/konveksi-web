<?php
namespace App\Filament\Resources\Portfolios\Tables;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PortfoliosTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_portofolio')
                    ->label('Nama Portofolio')
                    ->searchable(),
                TextColumn::make('deskripsi_portofolio')
                    ->label('Deskripsi Portofolio'),
                ImageColumn::make('gambar_portofolio')
                    ->alt('Portofolio Cosmos')
                    ->label('Gambar Portofolio')
                    ->visibility('public')
                    ->disk('public'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()
                    ->label('Edit')
                    ->modal()
                    ->modalHeading('Edit Portofolio')
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
