<?php

namespace App\Filament\Resources\MouvementStockItems\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class MouvementStockItemInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('mouvement_stock_id')
                    ->numeric(),
                TextEntry::make('colis_id')
                    ->numeric(),
                TextEntry::make('quantite')
                    ->numeric(),
                TextEntry::make('price')
                    ->money(),
                TextEntry::make('montant')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
