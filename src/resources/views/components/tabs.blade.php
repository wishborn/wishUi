@props(['variant' => 'default'])

<div x-data="{ activeTab: @entangle('activeTab') }" role="tablist">
    <div class="border-b border-gray-200">
        <nav class="-mb-px flex space-x-8" aria-label="Tabs">
            @foreach($tabs as $tab)
                <button
                    type="button"
                    role="tab"
                    id="tab-{{ $tab['name'] }}"
                    aria-controls="tab-panel-{{ $tab['name'] }}"
                    aria-selected="{{ $activeTab === $tab['name'] ? 'true' : 'false' }}"
                    @click="$wire.setActiveTab('{{ $tab['name'] }}')"
                    class="@if($variant === 'pills') rounded-full px-3 py-1.5 text-sm font-medium @if($activeTab === $tab['name']) bg-indigo-100 text-indigo-700 @else text-gray-500 hover:text-gray-700 @endif @else whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium @if($activeTab === $tab['name']) border-indigo-500 text-indigo-600 @else border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 @endif @endif"
                >
                    {{ $tab['label'] }}
                </button>
            @endforeach
        </nav>
    </div>

    <div class="mt-4">
        {{ $slot ?? '' }}
    </div>
</div> 