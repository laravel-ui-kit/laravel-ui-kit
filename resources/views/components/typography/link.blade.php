@props([
    'as' => config('ui-kit.components.link.props.as'),
    'color' => config('ui-kit.components.link.props.color'),
    'size' => config('ui-kit.components.link.props.size'),
    'href' => null,
    'content' => '',
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.link.style.root'),
        config('ui-kit.components.link.options.color')[$color],
        config('ui-kit.components.link.options.size')[$size],
    );
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>{{ $content }}{{ $slot }}</a>