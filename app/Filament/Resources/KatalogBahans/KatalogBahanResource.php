<?php

namespace App\Filament\Resources\KatalogBahans;

use App\Filament\Resources\KatalogBahans\Pages\CreateKatalogBahan;
use App\Filament\Resources\KatalogBahans\Pages\EditKatalogBahan;
use App\Filament\Resources\KatalogBahans\Pages\ListKatalogBahans;
use App\Filament\Resources\KatalogBahans\Schemas\KatalogBahanForm;
use App\Filament\Resources\KatalogBahans\Tables\KatalogBahansTable;
use App\Models\katalog_bahan as KatalogBahan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KatalogBahanResource extends Resource
{
    protected static ?string $model = KatalogBahan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $modelLabel = 'Katalog Bahan';

    protected static ?string $pluralModelLabel = 'Katalog Bahan';

    protected static ?string $navigationLabel = 'Katalog Bahan';

    protected static ?string $recordTitleAttribute = 'katalog Bahan';

    public static function form(Schema $schema): Schema
    {
        return KatalogBahanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KatalogBahansTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListKatalogBahans::route('/'),
        ];
    }
}
