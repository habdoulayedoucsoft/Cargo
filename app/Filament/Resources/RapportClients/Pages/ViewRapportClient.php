<?php

namespace App\Filament\Resources\RapportClients\Pages;

use App\Filament\Resources\RapportClients\RapportClientResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewRapportClient extends ViewRecord
{
    protected static string $resource = RapportClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
