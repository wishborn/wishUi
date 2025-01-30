<?php

namespace Wishborn\WishUi\Tests\Feature;

use Livewire\Livewire;
use Wishborn\WishUi\Tests\TestCase;

class TabsTest extends TestCase
{
    /** @test */
    public function it_can_render_tabs_component()
    {
        $component = Livewire::test('wish-ui::tabs')
            ->set('defaultTab', 'tab1')
            ->set('variant', 'default');

        $component->assertSet('activeTab', '');
        $component->assertSet('tabs', []);
    }

    /** @test */
    public function it_can_register_tabs()
    {
        $component = Livewire::test('wish-ui::tabs')
            ->set('defaultTab', 'tab1');

        // Create a test view with tab content
        $view = view('wish-ui::components.tab', [
            'name' => 'tab1',
            'label' => 'First Tab',
            'slot' => 'First tab content'
        ])->render();

        // Simulate tab registration
        $component->call('registerTab', 'tab1', 'First Tab');
        $component->call('registerTab', 'tab2', 'Second Tab');

        $component->assertSet('tabs', [
            ['name' => 'tab1', 'label' => 'First Tab'],
            ['name' => 'tab2', 'label' => 'Second Tab'],
        ]);

        // First registered tab should be active by default
        $component->assertSet('activeTab', 'tab1');
    }

    /** @test */
    public function it_can_switch_active_tab()
    {
        $component = Livewire::test('wish-ui::tabs')
            ->set('defaultTab', 'tab1');

        $component->call('registerTab', 'tab1', 'First Tab');
        $component->call('registerTab', 'tab2', 'Second Tab');

        $component->assertSet('activeTab', 'tab1');

        $component->call('setActiveTab', 'tab2');
        $component->assertSet('activeTab', 'tab2');
    }

    /** @test */
    public function it_respects_default_tab_setting()
    {
        $component = Livewire::test('wish-ui::tabs')
            ->set('defaultTab', 'tab2');

        $component->call('registerTab', 'tab1', 'First Tab');
        $component->call('registerTab', 'tab2', 'Second Tab');

        $component->assertSet('activeTab', 'tab2');
    }

    /** @test */
    public function it_can_handle_pill_variant()
    {
        $component = Livewire::test('wish-ui::tabs')
            ->set('variant', 'pills')
            ->set('defaultTab', 'tab1');

        $component->call('registerTab', 'tab1', 'First Tab');
        
        $component->assertSet('variant', 'pills');
        
        // Test that the component renders with pill styling
        $component->assertSee('rounded-full', false);
    }

    /** @test */
    public function it_prevents_duplicate_tab_registration()
    {
        $component = Livewire::test('wish-ui::tabs');

        $component->call('registerTab', 'tab1', 'First Tab');
        $component->call('registerTab', 'tab1', 'First Tab');

        // Should only have one instance of the tab
        $tabs = $component->get('tabs');
        $this->assertEquals(1, count($tabs));
    }
} 