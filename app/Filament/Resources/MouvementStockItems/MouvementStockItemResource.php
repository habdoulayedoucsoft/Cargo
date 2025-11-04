<?php

namespace App\Filament\Resources\MouvementStockItems;

use App\Filament\Resources\MouvementStockItems\Pages\CreateMouvementStockItem;
use App\Filament\Resources\MouvementStockItems\Pages\EditMouvementStockItem;
use App\Filament\Resources\MouvementStockItems\Pages\ListMouvementStockItems;
use App\Filament\Resources\MouvementStockItems\Pages\ViewMouvementStockItem;
use App\Filament\Resources\MouvementStockItems\Schemas\MouvementStockItemForm;
use App\Filament\Resources\MouvementStockItems\Schemas\MouvementStockItemInfolist;
use App\Filament\Resources\MouvementStockItems\Tables\MouvementStockItemsTable;
use App\Models\MouvementStockItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MouvementStockItemResource extends Resource
{
    protected static ?string $model = MouvementStockItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Mouvement Stock Item';

    public static function form(Schema $schema): Schema
    {
        return MouvementStockItemForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MouvementStockItemInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MouvementStockItemsTable::configure($table);
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
            'index' => ListMouvementStockItems::route('/'),
            'create' => CreateMouvementStockItem::route('/create'),
            'view' => ViewMouvementStockItem::route('/{record}'),
            'edit' => EditMouvementStockItem::route('/{record}/edit'),
        ];
    }
}
