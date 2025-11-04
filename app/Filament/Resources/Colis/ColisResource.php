<?php

namespace App\Filament\Resources\Colis;

use App\Filament\Resources\Colis\Pages\CreateColis;
use App\Filament\Resources\Colis\Pages\EditColis;
use App\Filament\Resources\Colis\Pages\ListColis;
use App\Filament\Resources\Colis\Pages\ViewColis;
use App\Filament\Resources\Colis\Schemas\ColisForm;
use App\Filament\Resources\Colis\Schemas\ColisInfolist;
use App\Filament\Resources\Colis\Tables\ColisTable;
use App\Models\Colis;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ColisResource extends Resource
{
    protected static ?string $model = Colis::class;

    //protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Colis';

    public static function form(Schema $schema): Schema
    {
        return ColisForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ColisInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ColisTable::configure($table);
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
            'index' => ListColis::route('/'),
            'create' => CreateColis::route('/create'),
            'view' => ViewColis::route('/{record}'),
            'edit' => EditColis::route('/{record}/edit'),
        ];
    }
}
