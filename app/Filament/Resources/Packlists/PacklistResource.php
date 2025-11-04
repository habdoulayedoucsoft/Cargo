<?php

namespace App\Filament\Resources\Packlists;

use App\Filament\Resources\Packlists\Pages\CreatePacklist;
use App\Filament\Resources\Packlists\Pages\EditPacklist;
use App\Filament\Resources\Packlists\Pages\ListPacklists;
use App\Filament\Resources\Packlists\Pages\ViewPacklist;
use App\Filament\Resources\Packlists\Schemas\PacklistForm;
use App\Filament\Resources\Packlists\Schemas\PacklistInfolist;
use App\Filament\Resources\Packlists\Tables\PacklistsTable;
use App\Models\Packlist;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PacklistResource extends Resource
{
    protected static ?string $model = Packlist::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Packlist';

    public static function form(Schema $schema): Schema
    {
        return PacklistForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PacklistInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PacklistsTable::configure($table);
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
            'index' => ListPacklists::route('/'),
            'create' => CreatePacklist::route('/create'),
            'view' => ViewPacklist::route('/{record}'),
            'edit' => EditPacklist::route('/{record}/edit'),
        ];
    }
}
