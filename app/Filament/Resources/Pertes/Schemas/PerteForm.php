<?php

namespace App\Filament\Resources\Pertes\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PerteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('date')
                    ->required(),
                TextInput::make('montant_total')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('cause_perte'),
                Textarea::make('commentaire')
                    ->columnSpanFull(),
            ]);
    }
}
