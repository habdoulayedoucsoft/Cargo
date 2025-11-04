<?php

namespace App\Filament\Resources\Conteneurs\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ConteneurForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('numero')
                    ->required(),
                TextInput::make('capacite')
                    ->numeric(),
                Select::make('statut')
                    ->options(['en_transit' => 'En transit', 'au_port' => 'Au port', 'en_depot' => 'En depot'])
                    ->default('en_transit')
                    ->required(),
                DatePicker::make('date_arrivee'),
            ]);
    }
}
