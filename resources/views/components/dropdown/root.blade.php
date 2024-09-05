@props([
    'size' => config('ui-kit.components.dropdown.props.size'),
    'color' => config('ui-kit.components.dropdown.props.color'),
    'align' => config('ui-kit.components.dropdown.props.align'),
    'triggerClasses' => '',
    'containerClasses' => '',
    'menuClasses' => '',
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.dropdown.classes.root'),
        config("ui-kit.components.dropdown.options.color.$color.root"),
        config("ui-kit.components.dropdown.options.size.$size.root"),
        config("ui-kit.components.dropdown.options.align.$align.root"),
    );

    $triggerClasses = Str::mergeClasses(
        config('ui-kit.components.dropdown.classes.trigger'),
        config("ui-kit.components.dropdown.options.color.$color.trigger"),
        config("ui-kit.components.dropdown.options.size.$size.trigger"),
        config("ui-kit.components.dropdown.options.align.$align.trigger"),
        $triggerClasses
    );

    $containerClasses = Str::mergeClasses(
        config('ui-kit.components.dropdown.classes.container'),
        config("ui-kit.components.dropdown.options.color.$color.container"),
        config("ui-kit.components.dropdown.options.size.$size.container"),
        config("ui-kit.components.dropdown.options.align.$align.container"),
        $containerClasses
    );

    $menuClasses = Str::mergeClasses(
        config('ui-kit.components.dropdown.classes.menu'),
        config("ui-kit.components.dropdown.options.color.$color.menu"),
        config("ui-kit.components.dropdown.options.size.$size.menu"),
        config("ui-kit.components.dropdown.options.align.$align.menu"),
        $menuClasses
    );
@endphp

<div @click.away="open = false" class="relative" x-data="{ open: false }" {{ $attributes->merge(['class' => $classes]) }}>
    <span @click="open = !open" class="{{ $triggerClasses }}">
        {{ $trigger }}
    </span>

    <div x-show="open" 
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="transform opacity-0 scale-95" 
        x-transition:enter-end="transform opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75" 
        x-transition:leave-start="transform opacity-100 scale-100"
        x-transition:leave-end="transform opacity-0 scale-95"
        class="{{ $containerClasses }}"
        tabindex="-1">
        <div class="{{ $menuClasses }}">
            {{ $slot }}
        </div>
    </div>
</div>
