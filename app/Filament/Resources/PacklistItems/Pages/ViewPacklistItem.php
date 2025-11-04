<?php

namespace App\Filament\Resources\PacklistItems\Pages;

use App\Filament\Resources\PacklistItems\PacklistItemResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPacklistItem extends ViewRecord
{
    protected static string $resource = PacklistItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
