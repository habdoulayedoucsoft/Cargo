<?php

namespace App\Filament\Resources\RapportClients\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class RapportClientInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('customer_id')
                    ->numeric(),
                TextEntry::make('paiement_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('date_reception')
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
