<?php

namespace App\Filament\Resources\KatalogBahans\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class KatalogBahanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Katalog Bahan')
                    ->description('Masukkan detail katalog bahan konveksi.')
                    ->schema([
                        TextInput::make('nama_bahan')
                            ->label('Nama Bahan')
                            ->required(),
                        TextInput::make('kualitas_bahan')
                            ->label('Kualitas Bahan'),
                        Textarea::make('deskripsi')
                            ->label('Deskripsi')
                            ->rows(5)
                            ->columnSpanFull()
                            ->required(),
                        FileUpload::make('gambar_bahan')
                            ->label('Gambar Bahan')
                            ->image()
                            ->required()
                            ->disk('public')
                            ->directory('katalog_bahan'),
                        Select::make('status_ketersediaan')
                            ->label('Status Ketersediaan')
                            ->options([
                                'tersedia' => 'Tersedia',
                                'tidak_tersedia' => 'Tidak Tersedia',
                                'perlu_konfirmasi' => 'Perlu Konfirmasi',
                            ]),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),
            ]);
    }
}
