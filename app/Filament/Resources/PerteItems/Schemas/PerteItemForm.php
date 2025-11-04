<?php

namespace App\Filament\Resources\PerteItems\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PerteItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('perte_id')
                    ->required()
                    ->numeric(),
                TextInput::make('colis_id')
                    ->required()
                    ->numeric(),
                TextInput::make('montant')
                    ->required()
                    ->numeric(),
            ]);
    }
}
