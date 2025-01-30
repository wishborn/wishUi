<?php

namespace Wishborn\WishUi\Tests\Feature;

use Livewire\Livewire;
use Wishborn\WishUi\Tests\TestCase;

class TabTest extends TestCase
{
    /** @test */
    public function it_can_render_tab_component()
    {
        $component = Livewire::test('wish-ui::tab', [
            'name' => 'test-tab',
            'label' => 'Test Tab'
        ]);

        $component->assertSee('role="tabpanel"', false);
    }

    /** @test */
    public function it_dispatches_register_event_on_mount()
    {
        $component = Livewire::test('wish-ui::tab', [
            'name' => 'test-tab',
            'label' => 'Test Tab'
        ]);

        $component->assertDispatched('registerTab');
    }

    /** @test */
    public function it_renders_slot_content()
    {
        $component = Livewire::test('wish-ui::tab', [
            'name' => 'test-tab',
            'label' => 'Test Tab'
        ]);

        $component->assertSee('role="tabpanel"', false);
    }

    /** @test */
    public function it_has_proper_accessibility_attributes()
    {
        $component = Livewire::test('wish-ui::tab', [
            'name' => 'test-tab',
            'label' => 'Test Tab'
        ]);

        $component->assertSee('role="tabpanel"', false)
                 ->assertSee('tabindex="0"', false);
    }
} 