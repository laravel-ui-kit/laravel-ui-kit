@props([
    'as' => config('ui-kit.components.sidebar-item.props.as'),
    'color' => config('ui-kit.components.sidebar-item.props.color'),
    'size' => config('ui-kit.components.sidebar-item.props.size'),
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.sidebar-item.classes.root'),
        config("ui-kit.components.sidebar-item.options.color.$color"),
        config("ui-kit.components.sidebar-item.options.size.$size"),
    );
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</{{ $as }}>