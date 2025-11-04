<?php

namespace App\Filament\Resources\Packlists\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PacklistsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('shipping_company')
                    ->searchable(),
                TextColumn::make('container_numero')
                    ->searchable(),
                TextColumn::make('seal_numero')
                    ->searchable(),
                TextColumn::make('consignee_name')
                    ->searchable(),
                TextColumn::make('port')
                    ->searchable(),
                TextColumn::make('loaded_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('date_of_arrive')
                    ->date()
                    ->sortable(),
                TextColumn::make('tel')
                    ->searchable(),
                TextColumn::make('container_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
