<?php

namespace App\Filament\Resources\Paiements\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PaiementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('customer_id')
                    ->required()
                    ->numeric(),
                TextInput::make('colis_id')
                    ->numeric(),
                TextInput::make('montant_paye')
                    ->required()
                    ->numeric(),
                TextInput::make('taxe_payement')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                DatePicker::make('date_paiement'),
                DatePicker::make('date_limite_paiement'),
                Select::make('mode_paiement')
                    ->options(['espèces' => 'Espèces', 'mobile_money' => 'Mobile money', 'virement' => 'Virement'])
                    ->default('espèces')
                    ->required(),
            ]);
    }
}
