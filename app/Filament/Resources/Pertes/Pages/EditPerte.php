<?php

namespace App\Filament\Resources\Pertes\Pages;

use App\Filament\Resources\Pertes\PerteResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPerte extends EditRecord
{
    protected static string $resource = PerteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
