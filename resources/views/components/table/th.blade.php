@props([
    'as' => config('ui-kit.components.th.props.as'),
    'color' => config('ui-kit.components.th.props.color'),
    'align' => config('ui-kit.components.th.props.align'),
    'size' => config('ui-kit.components.th.props.size'),
    'content' => '',
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.th.style.root'),
        config("ui-kit.components.th.options.color.$color"),
        config("ui-kit.components.th.options.align.$align"),
        config("ui-kit.components.th.options.size.$size"),
    );
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}>{{ $content }}{{ $slot }}</{{ $as }}>
