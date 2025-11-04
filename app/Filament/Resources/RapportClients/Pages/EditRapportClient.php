<?php

namespace App\Filament\Resources\RapportClients\Pages;

use App\Filament\Resources\RapportClients\RapportClientResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditRapportClient extends EditRecord
{
    protected static string $resource = RapportClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
