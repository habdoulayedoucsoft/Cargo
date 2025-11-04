<?php

namespace App\Filament\Resources\Packlists\Pages;

use App\Filament\Resources\Packlists\PacklistResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPacklist extends ViewRecord
{
    protected static string $resource = PacklistResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
