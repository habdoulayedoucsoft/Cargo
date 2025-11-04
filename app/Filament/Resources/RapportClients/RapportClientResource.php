<?php

namespace App\Filament\Resources\RapportClients;

use App\Filament\Resources\RapportClients\Pages\CreateRapportClient;
use App\Filament\Resources\RapportClients\Pages\EditRapportClient;
use App\Filament\Resources\RapportClients\Pages\ListRapportClients;
use App\Filament\Resources\RapportClients\Pages\ViewRapportClient;
use App\Filament\Resources\RapportClients\Schemas\RapportClientForm;
use App\Filament\Resources\RapportClients\Schemas\RapportClientInfolist;
use App\Filament\Resources\RapportClients\Tables\RapportClientsTable;
use App\Models\RapportClient;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class RapportClientResource extends Resource
{
    protected static ?string $model = RapportClient::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Rapport Client';

    public static function form(Schema $schema): Schema
    {
        return RapportClientForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return RapportClientInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RapportClientsTable::configure($table);
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
            'index' => ListRapportClients::route('/'),
            'create' => CreateRapportClient::route('/create'),
            'view' => ViewRapportClient::route('/{record}'),
            'edit' => EditRapportClient::route('/{record}/edit'),
        ];
    }
}
