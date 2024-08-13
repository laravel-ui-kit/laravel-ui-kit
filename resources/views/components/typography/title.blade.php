@props([
    'as' => config('ui-kit.components.title.props.as'),
    'size' => config('ui-kit.components.title.props.size'),
    'align' => config('ui-kit.components.title.props.align'),
    'color' => config('ui-kit.components.title.props.color'),
    'weight' => config('ui-kit.components.title.props.weight'),
    'content' => '',
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.title.style.root'),
        config('ui-kit.components.title.options.size')[$size],
        config('ui-kit.components.title.options.align')[$align],
        config('ui-kit.components.title.options.color')[$color],
        config("ui-kit.components.title.options.weight.$weight"),
    );
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}>{{ $content }}{{ $slot }}</{{ $as }}>
