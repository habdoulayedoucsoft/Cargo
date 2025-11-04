<?php

namespace App\Filament\Resources\PerteItems;

use App\Filament\Resources\PerteItems\Pages\CreatePerteItem;
use App\Filament\Resources\PerteItems\Pages\EditPerteItem;
use App\Filament\Resources\PerteItems\Pages\ListPerteItems;
use App\Filament\Resources\PerteItems\Pages\ViewPerteItem;
use App\Filament\Resources\PerteItems\Schemas\PerteItemForm;
use App\Filament\Resources\PerteItems\Schemas\PerteItemInfolist;
use App\Filament\Resources\PerteItems\Tables\PerteItemsTable;
use App\Models\PerteItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PerteItemResource extends Resource
{
    protected static ?string $model = PerteItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Perte Items';

    public static function form(Schema $schema): Schema
    {
        return PerteItemForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PerteItemInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PerteItemsTable::configure($table);
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
            'index' => ListPerteItems::route('/'),
            'create' => CreatePerteItem::route('/create'),
            'view' => ViewPerteItem::route('/{record}'),
            'edit' => EditPerteItem::route('/{record}/edit'),
        ];
    }
}
