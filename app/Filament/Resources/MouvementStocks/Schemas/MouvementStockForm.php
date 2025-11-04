<?php

namespace App\Filament\Resources\MouvementStocks\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class MouvementStockForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('date')
                    ->required(),
                TextInput::make('customer_id')
                    ->numeric(),
                TextInput::make('reference'),
                Select::make('type')
                    ->options(['entree' => 'Entree', 'sortie' => 'Sortie'])
                    ->required(),
                TextInput::make('total')
                    ->required()
                    ->numeric()
                    ->default(0.0),
                TextInput::make('entrepot_id')
                    ->numeric(),
                Textarea::make('commentaire')
                    ->columnSpanFull(),
            ]);
    }
}
