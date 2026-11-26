<?php
namespace App\Filament\Resources\Portfolios\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Components\Section;

class PortfolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Portofolio')
                    ->schema([
                        TextInput::make('nama_portofolio')
                            ->label('Nama Portofolio')
                            ->required(),
                        Select::make('kategori_id')
                            ->relationship('kategori','nama_kategori')
                            ->preload()
                            ->required(),
                        Textarea::make('deskripsi_portofolio')
                            ->label('Deskripsi Portofolio')
                            ->rows(3)
                            ->required(),
                        FileUpload::make('gambar_portofolio')
                            ->label('Gambar Portofolio')
                            ->disk('public')
                            ->directory('portofolio')
                            ->visibility('public'),

                    ])
                    ->columns(2)
                    ->columnSpanFull(),
            ]);
    }
}
