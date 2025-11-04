<?php

namespace App\Filament\Resources\Entrepots\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EntrepotForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nom')
                    ->required(),
                TextInput::make('adresse'),
                TextInput::make('capacite')
                    ->numeric(),
            ]);
    }
}
