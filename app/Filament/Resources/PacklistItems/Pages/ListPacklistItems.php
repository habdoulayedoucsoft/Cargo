<?php

namespace App\Filament\Resources\PacklistItems\Pages;

use App\Filament\Resources\PacklistItems\PacklistItemResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPacklistItems extends ListRecords
{
    protected static string $resource = PacklistItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
