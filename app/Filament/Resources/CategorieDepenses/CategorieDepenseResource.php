<?php

namespace App\Filament\Resources\CategorieDepenses;

use App\Filament\Resources\CategorieDepenses\Pages\CreateCategorieDepense;
use App\Filament\Resources\CategorieDepenses\Pages\EditCategorieDepense;
use App\Filament\Resources\CategorieDepenses\Pages\ListCategorieDepenses;
use App\Filament\Resources\CategorieDepenses\Pages\ViewCategorieDepense;
use App\Filament\Resources\CategorieDepenses\Schemas\CategorieDepenseForm;
use App\Filament\Resources\CategorieDepenses\Schemas\CategorieDepenseInfolist;
use App\Filament\Resources\CategorieDepenses\Tables\CategorieDepensesTable;
use App\Models\CategorieDepense;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CategorieDepenseResource extends Resource
{
    protected static ?string $model = CategorieDepense::class;

    // protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Categorie Depense';

    public static function form(Schema $schema): Schema
    {
        return CategorieDepenseForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CategorieDepenseInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CategorieDepensesTable::configure($table);
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
            'index' => ListCategorieDepenses::route('/'),
            'create' => CreateCategorieDepense::route('/create'),
            'view' => ViewCategorieDepense::route('/{record}'),
            'edit' => EditCategorieDepense::route('/{record}/edit'),
        ];
    }
}
