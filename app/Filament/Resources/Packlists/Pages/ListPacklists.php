<?php

namespace App\Filament\Resources\Packlists\Pages;

use App\Filament\Resources\Packlists\PacklistResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPacklists extends ListRecords
{
    protected static string $resource = PacklistResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
