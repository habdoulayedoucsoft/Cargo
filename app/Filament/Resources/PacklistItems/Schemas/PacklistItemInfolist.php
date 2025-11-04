<?php

namespace App\Filament\Resources\PacklistItems\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PacklistItemInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('packlist_id')
                    ->numeric(),
                TextEntry::make('customer_id')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('tel_no')
                    ->placeholder('-'),
                TextEntry::make('cargo_bills')
                    ->placeholder('-'),
                TextEntry::make('bale_no')
                    ->placeholder('-'),
                TextEntry::make('description')
                    ->placeholder('-'),
                TextEntry::make('goods')
                    ->placeholder('-'),
                TextEntry::make('cbm')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('unit_price')
                    ->numeric()
                    ->placeholder('-'),
                TextEntry::make('amount')
                    ->numeric()
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
