@props([
    'as' => config('ui-kit.components.th.props.as'),
    'color' => config('ui-kit.components.th.props.color'),
    'align' => config('ui-kit.components.th.props.align'),
    'content' => '',
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.th.style.root'),
        config("ui-kit.components.th.options.color.$color"),
        config("ui-kit.components.th.options.align.$align"),
    );
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}>{{ $content }}{{ $slot }}</{{ $as }}>
