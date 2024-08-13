@props([
    'type' => config('ui-kit.components.input.props.type'),
    'size' => config('ui-kit.components.input.props.size'),
    'color' => config('ui-kit.components.input.props.color'),
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.input.style.root'),
        config('ui-kit.components.input.options.size')[$size],
        config('ui-kit.components.input.options.color')[$color],
    );
@endphp

<input {{ $attributes->merge(['type' => $type, 'class' => $classes]) }} />