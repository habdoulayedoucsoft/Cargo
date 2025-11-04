<?php

namespace App\Filament\Resources\Users\Schemas;

use App\Models\Station;
use Filament\Schemas\Schema;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                // Informations de base
                TextInput::make('name')
                    ->label('Nom complet')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Ex : Abdoulaye Doucsoft'),

                TextInput::make('email')
                    ->label('Adresse e-mail')
                    ->email()
                    ->unique(ignoreRecord: true)
                    ->required()
                    ->placeholder('exemple@mail.com'),

                // Mot de passe
                TextInput::make('password')
                    ->label('Mot de passe')
                    ->password()
                    ->required(fn ($livewire) => $livewire instanceof \App\Filament\Resources\Users\Pages\CreateUser)
                    ->dehydrated(fn ($state) => filled($state))
                    ->afterStateHydrated(fn ($component, $state) => $component->state('')) // empêche l'affichage du hash
                    ->dehydrateStateUsing(fn ($state) => filled($state) ? Hash::make($state) : null)
                    ->helperText('Laisser vide pour conserver le mot de passe existant.'),

               Select::make('role')
                ->label('Rôle principal')
                ->options(fn () => Role::pluck('name', 'id'))
                ->required()
                ->searchable()
                ->preload()
                ->dehydrated(false) // ne pas sauvegarder directement
                ->afterStateHydrated(function ($component, $state, $record) {
                    // Si l'utilisateur a déjà des rôles, pré-remplir avec le premier
                    if ($record && $record->roles->count() > 0) {
                        $component->state($record->roles->first()->id);
                    }
                })
                ->afterStateUpdated(function ($state, $set, $get, $record) {
                    if ($record) {
                        $record->syncRoles([$state]); // Assigne le rôle sélectionné
                    }
                }),
            ]);
    }
}