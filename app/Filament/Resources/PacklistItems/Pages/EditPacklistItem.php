<?php

namespace App\Filament\Resources\PacklistItems\Pages;

use App\Filament\Resources\PacklistItems\PacklistItemResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPacklistItem extends EditRecord
{
    protected static string $resource = PacklistItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
