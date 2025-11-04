<?php

namespace App\Filament\Resources\RapportClients\Pages;

use App\Filament\Resources\RapportClients\RapportClientResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRapportClients extends ListRecords
{
    protected static string $resource = RapportClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
