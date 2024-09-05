@props([
    'as' => config('ui-kit.components.divider.props.as'),
    'color' => config('ui-kit.components.divider.props.color'),
    'size' => config('ui-kit.components.divider.props.size'),
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.divider.classes.root'),
        config("ui-kit.components.divider.options.color.$color"),
        config("ui-kit.components.divider.options.size.$size"),
    );
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes, 'role' => 'presentation']) }} />