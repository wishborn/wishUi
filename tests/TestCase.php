<?php

namespace Wishborn\WishUi\Tests;

use Livewire\Volt\Volt;
use Livewire\LivewireServiceProvider;
use Livewire\Livewire;
use Orchestra\Testbench\TestCase as Orchestra;
use Wishborn\WishUi\Providers\WishUiServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            LivewireServiceProvider::class,
            WishUiServiceProvider::class,
        ];
    }

    protected function setUp(): void
    {
        parent::setUp();

        // Configure view paths
        config()->set('view.paths', [
            __DIR__ . '/../src/resources/views',
            resource_path('views'),
        ]);

        // Register components for testing
        Livewire::component('wish-ui::tab', \Wishborn\WishUi\Views\Components\Tab::class);
        Livewire::component('wish-ui::tabs', \Wishborn\WishUi\Views\Components\Tabs::class);
    }

    protected function getEnvironmentSetUp($app)
    {
        // Set up any environment configuration
        $app['config']->set('app.key', 'base64:'.base64_encode(random_bytes(32)));
        
        // Configure view paths
        $app['config']->set('view.paths', [
            __DIR__ . '/../src/resources/views',
            resource_path('views'),
        ]);
    }
} 