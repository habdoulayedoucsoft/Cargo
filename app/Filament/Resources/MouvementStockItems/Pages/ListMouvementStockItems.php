<?php

namespace App\Filament\Resources\MouvementStockItems\Pages;

use App\Filament\Resources\MouvementStockItems\MouvementStockItemResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMouvementStockItems extends ListRecords
{
    protected static string $resource = MouvementStockItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
