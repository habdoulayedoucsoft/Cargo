<?php

namespace App\Filament\Resources\Entrepots\Pages;

use App\Filament\Resources\Entrepots\EntrepotResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditEntrepot extends EditRecord
{
    protected static string $resource = EntrepotResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
