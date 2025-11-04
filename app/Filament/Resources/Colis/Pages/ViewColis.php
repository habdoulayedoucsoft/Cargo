<?php

namespace App\Filament\Resources\Colis\Pages;

use App\Filament\Resources\Colis\ColisResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewColis extends ViewRecord
{
    protected static string $resource = ColisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
