<?php

namespace App\Filament\Resources\Packlists\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PacklistForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('shipping_company'),
                TextInput::make('container_numero')
                    ->required(),
                TextInput::make('seal_numero'),
                TextInput::make('consignee_name'),
                TextInput::make('port'),
                DatePicker::make('loaded_date'),
                DatePicker::make('date_of_arrive'),
                TextInput::make('tel')
                    ->tel(),
                TextInput::make('container_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
