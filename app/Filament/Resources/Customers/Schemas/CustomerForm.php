<?php
namespace App\Filament\Resources\Customers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CustomerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Customer')
                    ->schema([
                        TextInput::make('nama_customer')
                            ->label('Nama Customer')
                            ->required(),
                        TextInput::make('nomor_whatsapp')
                            ->label('Nomor Customer')
                            ->numeric()
                            ->required(),
                        TextInput::make('alamat')
                            ->label('Alamat Customer'),
                        TextInput::make('kota')
                            ->label('Asal Kota Customer'),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),
            ]);
    }
}
