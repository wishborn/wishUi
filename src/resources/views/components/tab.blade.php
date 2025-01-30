@props(['name', 'label'])

<div
    x-show="activeTab === '{{ $name }}'"
    role="tabpanel"
    id="tab-panel-{{ $name }}"
    aria-labelledby="tab-{{ $name }}"
    tabindex="0"
    x-cloak
>
    {{ $slot ?? '' }}
</div> 