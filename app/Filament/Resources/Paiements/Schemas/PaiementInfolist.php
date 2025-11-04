<?php

namespace App\Filament\Resources\Paiements\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PaiementInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('customer_id')
                    ->numeric(),
                TextEntry::make('colis_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('montant_paye')
                    ->numeric(),
                TextEntry::make('taxe_payement')
                    ->numeric(),
                TextEntry::make('date_paiement')
                    ->date()
                    ->placeholder('-'),
                TextEntry::make('date_limite_paiement')
                    ->date()
                    ->placeholder('-'),
                TextEntry::make('mode_paiement')
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
