@props([
    'size' => config('ui-kit.components.dropdown.props.size'),
    'color' => config('ui-kit.components.dropdown.props.color'),
    'align' => config('ui-kit.components.dropdown.props.align'),
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.dropdown.style.root'),
        config("ui-kit.components.dropdown.options.size.$size"),
        config("ui-kit.components.dropdown.options.color.$color"),
        config("ui-kit.components.dropdown.options.align.$align"),
    );

    $containerClasses = Str::mergeClasses(
        config('ui-kit.components.dropdown.style.container'),
        config("ui-kit.components.dropdown.options.$color.containerColor"),
    );
@endphp

<div @click.away="open = false" class="relative" x-data="{ open: false }">
    <span @click="open = !open">
        {{ $trigger }}
    </span>

    <div x-show="open" 
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95" 
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" 
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="{{ $classes }}"
        tabindex="-1">
        <div class="{{ $containerClasses }}">
            {{ $slot }}
        </div>
    </div>
</div>
