<?php

namespace App\Filament\Resources\MouvementStockItems\Pages;

use App\Filament\Resources\MouvementStockItems\MouvementStockItemResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMouvementStockItem extends ViewRecord
{
    protected static string $resource = MouvementStockItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
