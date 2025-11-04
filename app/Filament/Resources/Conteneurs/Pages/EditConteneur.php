<?php

namespace App\Filament\Resources\Conteneurs\Pages;

use App\Filament\Resources\Conteneurs\ConteneurResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditConteneur extends EditRecord
{
    protected static string $resource = ConteneurResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
