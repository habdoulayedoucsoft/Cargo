<?php

namespace App\Filament\Resources\RapportClients\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RapportClientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('customer_id')
                    ->required()
                    ->numeric(),
                TextInput::make('paiement_id')
                    ->numeric(),
                DatePicker::make('date_reception'),
            ]);
    }
}
