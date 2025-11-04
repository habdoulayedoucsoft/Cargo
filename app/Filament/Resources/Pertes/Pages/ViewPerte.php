<?php

namespace App\Filament\Resources\Pertes\Pages;

use App\Filament\Resources\Pertes\PerteResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPerte extends ViewRecord
{
    protected static string $resource = PerteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
