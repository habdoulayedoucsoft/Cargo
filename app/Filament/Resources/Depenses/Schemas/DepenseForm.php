<?php

namespace App\Filament\Resources\Depenses\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DepenseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('type_depense')
                    ->required(),
                TextInput::make('montant')
                    ->required()
                    ->numeric(),
                TextInput::make('categorie_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
