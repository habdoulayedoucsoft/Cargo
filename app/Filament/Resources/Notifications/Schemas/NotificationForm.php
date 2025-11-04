<?php

namespace App\Filament\Resources\Notifications\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class NotificationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('customer_id')
                    ->required()
                    ->numeric(),
                Select::make('type')
                    ->options([
            'Arrivée colis' => 'Arrivée colis',
            'Retard paiement' => 'Retard paiement',
            'Info générale' => 'Info générale',
        ])
                    ->required(),
                Textarea::make('message')
                    ->required()
                    ->columnSpanFull(),
                DateTimePicker::make('date_envoi'),
                Select::make('statut')
                    ->options(['Envoyé' => 'Envoyé', 'Échoué' => 'Échoué'])
                    ->default('Envoyé')
                    ->required(),
            ]);
    }
}
