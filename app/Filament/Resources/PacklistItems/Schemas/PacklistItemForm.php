<?php

namespace App\Filament\Resources\PacklistItems\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PacklistItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('packlist_id')
                    ->required()
                    ->numeric(),
                TextInput::make('customer_id')
                    ->numeric(),
                TextInput::make('tel_no')
                    ->tel(),
                TextInput::make('cargo_bills'),
                TextInput::make('bale_no'),
                TextInput::make('description'),
                TextInput::make('goods'),
                TextInput::make('cbm')
                    ->numeric(),
                TextInput::make('unit_price')
                    ->numeric(),
                TextInput::make('amount')
                    ->numeric(),
            ]);
    }
}
