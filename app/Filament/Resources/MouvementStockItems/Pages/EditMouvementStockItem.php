<?php

namespace App\Filament\Resources\MouvementStockItems\Pages;

use App\Filament\Resources\MouvementStockItems\MouvementStockItemResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditMouvementStockItem extends EditRecord
{
    protected static string $resource = MouvementStockItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
