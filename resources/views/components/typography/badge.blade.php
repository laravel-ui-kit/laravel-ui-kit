@props([
    'as' => config('ui-kit.components.badge.props.as'),
    'size' => config('ui-kit.components.badge.props.size'),
    'color' => config('ui-kit.components.badge.props.color'),
    'content' => '',
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.badge.style.root'),
        config('ui-kit.components.badge.options.color')[$color],
        config('ui-kit.components.badge.options.size')[$size],
    );
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes])}}>
    {{ $content }}{{ $slot }}
</{{ $as }}>