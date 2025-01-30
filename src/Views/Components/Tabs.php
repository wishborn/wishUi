<?php

namespace Wishborn\WishUi\Views\Components;

use Livewire\Component;

class Tabs extends Component
{
    public $activeTab = '';
    public $tabs = [];
    public $defaultTab = '';
    public $variant = 'default';

    public function mount($defaultTab = '', $variant = 'default')
    {
        $this->defaultTab = $defaultTab;
        $this->variant = $variant;
    }

    public function registerTab($name, $label)
    {
        if (!in_array(['name' => $name, 'label' => $label], $this->tabs)) {
            $this->tabs[] = ['name' => $name, 'label' => $label];
        }
        
        if (empty($this->activeTab) && empty($this->defaultTab)) {
            $this->activeTab = $name;
        } elseif (empty($this->activeTab) && $name === $this->defaultTab) {
            $this->activeTab = $name;
        }
    }

    public function setActiveTab($tabName)
    {
        $this->activeTab = $tabName;
    }

    public function render()
    {
        return view('wish-ui::components.tabs');
    }
} 
