<?php

namespace App\Filament\Resources\Katalogs;

use App\Filament\Resources\Katalogs\Pages\CreateKatalog;
use App\Filament\Resources\Katalogs\Pages\EditKatalog;
use App\Filament\Resources\Katalogs\Pages\ListKatalogs;
use App\Filament\Resources\Katalogs\Schemas\KatalogForm;
use App\Filament\Resources\Katalogs\Tables\KatalogsTable;
use App\Models\Katalog;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KatalogResource extends Resource
{
    protected static ?string $model = Katalog::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $modelLabel = 'Katalog';

    protected static ?string $pluralModelLabel = 'Katalog';

    protected static ?string $navigationLabel = 'Katalog';

    protected static ?string $recordTitleAttribute = 'katalog';


    public static function form(Schema $schema): Schema
    {
        return KatalogForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KatalogsTable::configure($table);
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
            'index' => ListKatalogs::route('/'),
            'create' => CreateKatalog::route('/create'),
            'edit' => EditKatalog::route('/{record}/edit'),
        ];
    }
}
