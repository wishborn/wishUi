<?php

namespace Wishborn\WishUi\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Wishborn\WishUi\Views\Components\Tab;
use Wishborn\WishUi\Views\Components\Tabs;

class WishUiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load views from the correct path
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'wish-ui');

        // Register Livewire Components with the correct naming
        Livewire::component('wish-ui.tab', Tab::class);
        Livewire::component('wish-ui.tabs', Tabs::class);

        // Publish views for customization
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/wish-ui'),
        ], 'wish-ui-views');
    }

    public function register()
    {
        //
    }
}
