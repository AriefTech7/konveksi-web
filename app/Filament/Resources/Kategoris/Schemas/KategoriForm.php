<?php
namespace App\Filament\Resources\Kategoris\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class KategoriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Kategori')
                    ->description('Masukkan detail kategori produk konveksi.')
                    ->schema([
                        TextInput::make('nama_kategori')
                            ->label('Nama Kategori')
                            ->required()
                            ->columnSpanFull(),

                        Textarea::make('deskripsi_kategori')
                            ->label('Deskripsi Kategori')
                            ->required()
                            ->rows(4)
                            ->columnSpanFull(),

                        FileUpload::make('gambar_kategori')
                            ->label('Gambar Kategori')
                            ->image()
                            ->disk('public')
                            ->directory('kategori')
                            ->visibility('public')
                            ->required(),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),
            ]);
    }
}
