<?php

namespace App\Filament\Resources\PerteItems\Pages;

use App\Filament\Resources\PerteItems\PerteItemResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPerteItem extends EditRecord
{
    protected static string $resource = PerteItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
