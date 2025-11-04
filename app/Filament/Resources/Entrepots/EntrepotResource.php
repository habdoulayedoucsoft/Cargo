<?php

namespace App\Filament\Resources\Entrepots;

use App\Filament\Resources\Entrepots\Pages\CreateEntrepot;
use App\Filament\Resources\Entrepots\Pages\EditEntrepot;
use App\Filament\Resources\Entrepots\Pages\ListEntrepots;
use App\Filament\Resources\Entrepots\Pages\ViewEntrepot;
use App\Filament\Resources\Entrepots\Schemas\EntrepotForm;
use App\Filament\Resources\Entrepots\Schemas\EntrepotInfolist;
use App\Filament\Resources\Entrepots\Tables\EntrepotsTable;
use App\Models\Entrepot;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EntrepotResource extends Resource
{
    protected static ?string $model = Entrepot::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Entrepot';

    public static function form(Schema $schema): Schema
    {
        return EntrepotForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return EntrepotInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EntrepotsTable::configure($table);
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
            'index' => ListEntrepots::route('/'),
            'create' => CreateEntrepot::route('/create'),
            'view' => ViewEntrepot::route('/{record}'),
            'edit' => EditEntrepot::route('/{record}/edit'),
        ];
    }
}
