<?php
namespace App\Filament\Resources\Katalogs\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\RawJs;
use Filament\Forms\Components\Select;

class KatalogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Katalog')
                    ->description('Masukkan detail katalog produk konveksi.')
                    ->schema([
                        TextInput::make('nama_katalog')
                            ->label('Nama Katalog')
                            ->required(),
                        Select::make('kategori_id')
                            ->label('Kategori katalog')
                            ->relationship('kategori', 'nama_kategori')
                            ->preload()
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
                    ])
                    ->columns(2)
                    ->columnSpanFull(),
            ]);
    }
}
