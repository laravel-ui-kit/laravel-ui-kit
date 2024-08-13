@props([
    'as' => config('ui-kit.components.td.props.as'),
    'color' => config('ui-kit.components.td.props.color'),
    'align' => config('ui-kit.components.td.props.align'),
    'content' => '',
])

@php
$classes = Str::mergeClasses(
    config('ui-kit.components.td.style.root'),
    config("ui-kit.components.td.options.color.$color"),
    config("ui-kit.components.td.options.align.$align"),
);
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}>{{ $content }}{{ $slot }}</{{ $as }}>
