<?php

namespace App\Filament\Resources\CategorieDepenses\Pages;

use App\Filament\Resources\CategorieDepenses\CategorieDepenseResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCategorieDepenses extends ListRecords
{
    protected static string $resource = CategorieDepenseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
