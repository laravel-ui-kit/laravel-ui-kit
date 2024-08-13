@props([
    'as' => config('ui-kit.components.card.props.as'),
    'color' => config('ui-kit.components.card.props.color'),
    'size' => config('ui-kit.components.container.props.size'),
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.card.style.root'),
        config('ui-kit.components.card.options.color')[$color],
        config('ui-kit.components.card.options.size')[$size],
    );
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</{{ $as }}>