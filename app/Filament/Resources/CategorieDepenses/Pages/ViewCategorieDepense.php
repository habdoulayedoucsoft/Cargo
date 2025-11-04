<?php

namespace App\Filament\Resources\CategorieDepenses\Pages;

use App\Filament\Resources\CategorieDepenses\CategorieDepenseResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCategorieDepense extends ViewRecord
{
    protected static string $resource = CategorieDepenseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
