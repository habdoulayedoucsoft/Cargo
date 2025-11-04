<?php

namespace App\Filament\Resources\Colis\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ColisForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('numero')
                    ->required(),
                TextInput::make('description'),
                TextInput::make('customer_id')
                    ->required()
                    ->numeric(),
                TextInput::make('colis_type'),
                TextInput::make('entrepot_id')
                    ->numeric(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->default(0.0)
                    ->prefix('$'),
                Select::make('statut')
                    ->options(['en_depot' => 'En depot', 'livre' => 'Livre', 'endommagé' => 'Endommagé', 'perdu' => 'Perdu'])
                    ->default('en_depot')
                    ->required(),
            ]);
    }
}
