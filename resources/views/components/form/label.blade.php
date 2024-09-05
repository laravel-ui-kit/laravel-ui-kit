@props([
    'as' => config('ui-kit.components.label.props.as'),
    'size' => config('ui-kit.components.label.props.size'),
    'color' => config('ui-kit.components.label.props.color'),
    'align' => config('ui-kit.components.label.props.align'),
    'for' => '',
    'content' => '',
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.label.classes.root'),
        config('ui-kit.components.label.options.size')[$size],
        config('ui-kit.components.label.options.color')[$color],
        config('ui-kit.components.label.options.align')[$align],
    );
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes, 'for' => $for ?: null]) }}>{{ $content }}{{ $slot }}</{{ $as }}>