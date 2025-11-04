<?php

namespace App\Filament\Resources\Conteneurs;

use App\Filament\Resources\Conteneurs\Pages\CreateConteneur;
use App\Filament\Resources\Conteneurs\Pages\EditConteneur;
use App\Filament\Resources\Conteneurs\Pages\ListConteneurs;
use App\Filament\Resources\Conteneurs\Pages\ViewConteneur;
use App\Filament\Resources\Conteneurs\Schemas\ConteneurForm;
use App\Filament\Resources\Conteneurs\Schemas\ConteneurInfolist;
use App\Filament\Resources\Conteneurs\Tables\ConteneursTable;
use App\Models\Conteneur;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ConteneurResource extends Resource
{
    protected static ?string $model = Conteneur::class;

    //protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Conteneur';

    public static function form(Schema $schema): Schema
    {
        return ConteneurForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ConteneurInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ConteneursTable::configure($table);
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
            'index' => ListConteneurs::route('/'),
            'create' => CreateConteneur::route('/create'),
            'view' => ViewConteneur::route('/{record}'),
            'edit' => EditConteneur::route('/{record}/edit'),
        ];
    }
}
