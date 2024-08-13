@props([
    'component' => config('ui-kit.components.sidebar-icon.props.component'),
    'size' => config('ui-kit.components.sidebar-icon.props.size'),
    'color' => config('ui-kit.components.sidebar-icon.props.color'),
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.sidebar-icon.style.root'),
        config("ui-kit.components.sidebar-icon.options.color.$color"),
        config("ui-kit.components.sidebar-icon.options.size.$size"),
        config("ui-kit.components.sidebar-icon.options.component.$component"),
    );
    // size-8 flex-none border rounded-md p-1.5 border-gray-200 bg-gray-100 dark:border-gray-700 dark:bg-gray-800
@endphp

<x-dynamic-component :component="$component" {{ $attributes->merge(['class' => $classes]) }} />