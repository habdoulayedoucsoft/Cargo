<?php

namespace App\Filament\Resources\Packlists\Pages;

use App\Filament\Resources\Packlists\PacklistResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPacklist extends EditRecord
{
    protected static string $resource = PacklistResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
