<?php

namespace App\Filament\Resources\Entrepots\Pages;

use App\Filament\Resources\Entrepots\EntrepotResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewEntrepot extends ViewRecord
{
    protected static string $resource = EntrepotResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
