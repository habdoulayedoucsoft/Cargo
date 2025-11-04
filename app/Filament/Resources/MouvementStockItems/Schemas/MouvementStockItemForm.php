<?php

namespace App\Filament\Resources\MouvementStockItems\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MouvementStockItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('mouvement_stock_id')
                    ->required()
                    ->numeric(),
                TextInput::make('colis_id')
                    ->required()
                    ->numeric(),
                TextInput::make('quantite')
                    ->required()
                    ->numeric()
                    ->default(1),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->default(0.0)
                    ->prefix('$'),
                TextInput::make('montant')
                    ->required()
                    ->numeric()
                    ->default(0.0),
            ]);
    }
}
