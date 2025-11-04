<?php

namespace App\Filament\Resources\PacklistItems;

use App\Filament\Resources\PacklistItems\Pages\CreatePacklistItem;
use App\Filament\Resources\PacklistItems\Pages\EditPacklistItem;
use App\Filament\Resources\PacklistItems\Pages\ListPacklistItems;
use App\Filament\Resources\PacklistItems\Pages\ViewPacklistItem;
use App\Filament\Resources\PacklistItems\Schemas\PacklistItemForm;
use App\Filament\Resources\PacklistItems\Schemas\PacklistItemInfolist;
use App\Filament\Resources\PacklistItems\Tables\PacklistItemsTable;
use App\Models\PacklistItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PacklistItemResource extends Resource
{
    protected static ?string $model = PacklistItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Pack List Item';

    public static function form(Schema $schema): Schema
    {
        return PacklistItemForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PacklistItemInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PacklistItemsTable::configure($table);
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
            'index' => ListPacklistItems::route('/'),
            'create' => CreatePacklistItem::route('/create'),
            'view' => ViewPacklistItem::route('/{record}'),
            'edit' => EditPacklistItem::route('/{record}/edit'),
        ];
    }
}
