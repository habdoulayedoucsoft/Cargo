<?php

namespace App\Filament\Resources\Conteneurs\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ConteneurInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('numero'),
                TextEntry::make('capacite')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('statut')
                    ->badge(),
                TextEntry::make('date_arrivee')
                    ->date()
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
