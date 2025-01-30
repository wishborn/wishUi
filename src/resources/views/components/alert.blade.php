<?php
namespace Wish\Views\Components;

use function Livewire\Volt\{state, computed, mount};


state([
    'type' => 'info',
    'message' => '',
    'show' => true,
    'dismissible' => true,
    'autoDismiss' => false,
    'duration' => 5000,
    'verticalAlign' => 'top',
    'horizontalAlign' => 'right'
]);

$dismiss = function () {
    $this->show = false;
};

$getBgColor = computed(function () {
    return match($this->type) {
        'brand' => 'bg-primary-100 border-secondary-400 text-secondary-700',
        'secondary' => 'bg-secondary-100 border-primary-400 text-primary-700',
        'success' => 'bg-green-100 border-green-400 text-green-700',
        'error' => 'bg-red-100 border-red-400 text-red-700',
        'warning' => 'bg-yellow-100 border-yellow-400 text-yellow-700',
        default => 'bg-blue-100 border-blue-400 text-blue-700',
    };
});

$getIcon = computed(function () {
    return match($this->type) {
        'success' => 'check-circle',
        'error' => 'x-circle',
        'warning' => 'exclamation-circle',
        default => 'information-circle',
    };
});

$getPositionClasses = computed(function () {
    $classes = ['fixed'];
    
    // Vertical alignment
    $classes[] = match($this->verticalAlign) {
        'top' => 'top-4',
        'middle' => 'top-1/2 -translate-y-1/2',
        'bottom' => 'bottom-4',
        default => 'top-4'
    };
    
    // Horizontal alignment
    $classes[] = match($this->horizontalAlign) {
        'left' => 'left-4',
        'middle' => 'left-1/2 -translate-x-1/2',
        'right' => 'right-4',
        default => 'right-4'
    };
    
    return implode(' ', $classes);
});

mount(function (
    $type = 'info',
    $message = '',
    $dismissible = true,
    $autoDismiss = false,
    $duration = 5000,
    $verticalAlign = 'top',
    $horizontalAlign = 'right'
) {
    $this->type = $type;
    $this->message = $message;
    $this->dismissible = $dismissible;
    $this->autoDismiss = $autoDismiss;
    $this->duration = $duration;
    $this->verticalAlign = $verticalAlign;
    $this->horizontalAlign = $horizontalAlign;

    if ($this->autoDismiss) {
        $this->dispatch('setTimeout', ['callback' => '$wire.dismiss()', 'duration' => $this->duration]);
    }
});

?>

<div x-data="{ show: @entangle('show') }" 
     x-show="show" 
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0 transform scale-95"
     x-transition:enter-end="opacity-100 transform scale-100"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100 transform scale-100"
     x-transition:leave-end="opacity-0 transform scale-95"
     class="z-50 w-auto max-w-sm {{ $this->getPositionClasses }} {{ $this->getBgColor }} rounded-lg p-4 mb-4 border shadow-lg" 
     role="alert">
    <div class="flex items-center">
        <div class="flex-shrink-0">
            <x-heroicon-o-{{ $this->getIcon }} class="h-5 w-5"/>
        </div>
        <div class="ml-3">
            <p class="text-sm">{{ $message }}</p>
        </div>
        @if($dismissible)
        <div class="ml-auto pl-3">
            <div class="-mx-1.5 -my-1.5">
                <button type="button" 
                        wire:click="dismiss"
                        class="inline-flex rounded-md p-1.5 focus:outline-none focus:ring-2 focus:ring-offset-2 {{ $this->getBgColor }}">
                    <span class="sr-only">Dismiss</span>
                    <x-heroicon-o-x-mark class="h-5 w-5"/>
                </button>
            </div>
        </div>
        @endif
    </div>
</div> 