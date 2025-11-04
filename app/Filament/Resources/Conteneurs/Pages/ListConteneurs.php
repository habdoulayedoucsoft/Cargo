<?php

namespace App\Filament\Resources\Conteneurs\Pages;

use App\Filament\Resources\Conteneurs\ConteneurResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListConteneurs extends ListRecords
{
    protected static string $resource = ConteneurResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
