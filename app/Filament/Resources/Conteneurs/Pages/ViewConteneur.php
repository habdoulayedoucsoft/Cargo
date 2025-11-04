<?php

namespace App\Filament\Resources\Conteneurs\Pages;

use App\Filament\Resources\Conteneurs\ConteneurResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewConteneur extends ViewRecord
{
    protected static string $resource = ConteneurResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
