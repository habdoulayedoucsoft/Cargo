<?php

namespace App\Filament\Resources\PerteItems\Pages;

use App\Filament\Resources\PerteItems\PerteItemResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPerteItem extends ViewRecord
{
    protected static string $resource = PerteItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
