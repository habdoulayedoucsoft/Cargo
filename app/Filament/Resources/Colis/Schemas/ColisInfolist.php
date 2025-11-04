<?php

namespace App\Filament\Resources\Colis\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ColisInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('numero'),
                TextEntry::make('description')
                    ->placeholder('-'),
                TextEntry::make('customer_id')
                    ->numeric(),
                TextEntry::make('colis_type')
                    ->placeholder('-'),
                TextEntry::make('entrepot_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('price')
                    ->money(),
                TextEntry::make('statut')
                    ->badge(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
