<?php

namespace App\Filament\Resources\Pertes;

use App\Filament\Resources\Pertes\Pages\CreatePerte;
use App\Filament\Resources\Pertes\Pages\EditPerte;
use App\Filament\Resources\Pertes\Pages\ListPertes;
use App\Filament\Resources\Pertes\Pages\ViewPerte;
use App\Filament\Resources\Pertes\Schemas\PerteForm;
use App\Filament\Resources\Pertes\Schemas\PerteInfolist;
use App\Filament\Resources\Pertes\Tables\PertesTable;
use App\Models\Perte;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PerteResource extends Resource
{
    protected static ?string $model = Perte::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Perte';

    public static function form(Schema $schema): Schema
    {
        return PerteForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PerteInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PertesTable::configure($table);
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
            'index' => ListPertes::route('/'),
            'create' => CreatePerte::route('/create'),
            'view' => ViewPerte::route('/{record}'),
            'edit' => EditPerte::route('/{record}/edit'),
        ];
    }
}
