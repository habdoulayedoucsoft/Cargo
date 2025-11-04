<?php

namespace App\Filament\Resources\Packlists\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PacklistInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('shipping_company')
                    ->placeholder('-'),
                TextEntry::make('container_numero'),
                TextEntry::make('seal_numero')
                    ->placeholder('-'),
                TextEntry::make('consignee_name')
                    ->placeholder('-'),
                TextEntry::make('port')
                    ->placeholder('-'),
                TextEntry::make('loaded_date')
                    ->date()
                    ->placeholder('-'),
                TextEntry::make('date_of_arrive')
                    ->date()
                    ->placeholder('-'),
                TextEntry::make('tel')
                    ->placeholder('-'),
                TextEntry::make('container_id')
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
