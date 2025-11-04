<?php

namespace App\Filament\Resources\Pertes\Pages;

use App\Filament\Resources\Pertes\PerteResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPertes extends ListRecords
{
    protected static string $resource = PerteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
