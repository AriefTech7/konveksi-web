<?php
namespace App\Filament\Resources\Katalogs\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Support\RawJs;

class KatalogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_katalog')
                    ->label('Nama Katalog')
                    ->required(),
                TextInput::make('harga')
                    ->label('Harga')
                    ->numeric()
                    ->prefix('Rp')
                    ->mask(RawJs::make('$money($input, \',\', \'.\', 0)'))
                    ->stripCharacters('.')
                    ->required(),
                Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->rows(5)
                    ->columnSpanFull()
                    ->required(),
                FileUpload::make('gambar_katalog')
                    ->label('Gambar Katalog')
                    ->image()
                    ->required()
                    ->disk('public')
                    ->directory('katalog'),
                TextInput::make('minimum_order')
                    ->label('Minimum Order')
                    ->numeric()
                    ->default(1)
                    ->minValue(1)
                    ->step(1)
                    ->suffix('pcs')
                    ->required(),
                TextInput::make('estimasi_produk')
                    ->label('Estimasi Produk')
                    ->numeric()
                    ->required()
                    ->suffix('hari'),
            ]);
    }
}
