<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Table;
use Filament\Notifications\Notification;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('roles.name')
                    ->label('Rôle')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'super_admin' => 'info',
                        'admin' => 'warning',
                        'user' => 'success',
                    })
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
                Action::make('changePassword') // Nom de l'action
                ->label('Changer le mot de passe') // Libellé affiché
                ->icon('heroicon-o-lock-closed') // Icône
                ->schema([
                    TextInput::make('password')
                        ->label('Nouveau mot de passe')
                        ->password()
                        ->required()
                        ->revealable(),
                    TextInput::make('password_confirmation')
                        ->label('Confirmer le mot de passe')
                        ->password()
                        ->required()
                        ->revealable()
                        ->same('password'),
                ])
                ->action(function (array $data, $record) {
                    // Met à jour le mot de passe
                    $record->update([
                        'password' => bcrypt($data['password']),
                    ]);

                    Notification::make()
                    ->title('Mot de passe mis à jour avec succès.')
                    ->success()
                    ->send();

                    // Message de confirmation
                    // Filament::notify('success', 'Mot de passe mis à jour avec succès.');
                }),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
