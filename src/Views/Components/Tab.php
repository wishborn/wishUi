<?php

namespace Wishborn\WishUi\Views\Components;

use Livewire\Component;

class Tab extends Component
{
    public $name;
    public $label;

    public function mount($name, $label)
    {
        $this->name = $name;
        $this->label = $label;
        $this->dispatch('registerTab', name: $name, label: $label);
    }

    public function render()
    {
        return view('wish-ui::components.tab');
    }
} 
