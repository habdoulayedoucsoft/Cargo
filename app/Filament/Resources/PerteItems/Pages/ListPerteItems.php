<?php

namespace App\Filament\Resources\PerteItems\Pages;

use App\Filament\Resources\PerteItems\PerteItemResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPerteItems extends ListRecords
{
    protected static string $resource = PerteItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
