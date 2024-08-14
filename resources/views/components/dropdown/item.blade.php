@props([
    'as' => config('ui-kit.components.dropdown-item.props.as'),
    'size' => config('ui-kit.components.dropdown-item.props.size'),
    'color' => config('ui-kit.components.dropdown-item.props.color'),
    'divider' => config('ui-kit.components.dropdown-item.props.divider'),
    'content' => '',
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.dropdown-item.style.root'),
        config('ui-kit.components.dropdown-item.options.size')[$size],
        config('ui-kit.components.dropdown-item.options.color')[$color],
        config('ui-kit.components.dropdown-item.options.divider')[$divider],
    );
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $content }}{{ $slot }}
</{{ $as }}>