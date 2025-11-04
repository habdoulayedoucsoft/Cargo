<?php

namespace App\Providers\Filament;

use App\Filament\Resources\CategorieDepenses\CategorieDepenseResource;
use App\Filament\Resources\Colis\ColisResource;
use App\Filament\Resources\Conteneurs\ConteneurResource;
use App\Filament\Resources\Customers\CustomerResource;
use App\Filament\Resources\Depenses\DepenseResource;
use App\Filament\Resources\Entrepots\EntrepotResource;
use App\Filament\Resources\MouvementStocks\MouvementStockResource;
use App\Filament\Resources\Packlists\PacklistResource;
use App\Filament\Resources\Paiements\PaiementResource;
use App\Filament\Resources\Pertes\PerteResource;
use App\Filament\Resources\RapportClients\RapportClientResource;
use App\Filament\Resources\Users\UserResource;
use Filament\Http\Middleware\Authenticate;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationBuilder;
use Filament\Navigation\NavigationGroup;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => '#1177ff',
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->plugins([
                FilamentShieldPlugin::make(),
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->navigation(function(NavigationBuilder $builder) {
                return $builder->groups([
                    NavigationGroup::make('Gestion des Colis')
                        ->items([
                            ...ColisResource::getNavigationItems(),
                            ...MouvementStockResource::getNavigationItems(),
                            ...RapportClientResource::getNavigationItems(),
                        ]),
                    NavigationGroup::make('Gestion des Conteneurs')
                        ->items([
                            ...ConteneurResource::getNavigationItems(),
                            ...EntrepotResource::getNavigationItems(),
                            ...PacklistResource::getNavigationItems(),
                        ]),
                    NavigationGroup::make('Gestion des Utilisateurs')
                        ->items([
                            ...CustomerResource::getNavigationItems(),
                            ...UserResource::getNavigationItems(),
                        ]),
                   NavigationGroup::make('Gestion des Finances')
                    ->items([
                        ...PaiementResource::getNavigationItems(),
                        ...DepenseResource::getNavigationItems(),
                        ...CategorieDepenseResource::getNavigationItems(),
                        ...PerteResource::getNavigationItems(),
                    ])
                ]);
            });
    }
}
