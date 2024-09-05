@props([
    'as' => config('ui-kit.components.container.props.as'),
    'size' => config('ui-kit.components.container.props.size'),
    'align' => config('ui-kit.components.container.props.align'),
    'color' => config('ui-kit.components.container.props.color'),
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.container.classes.root'),
        config("ui-kit.components.container.options.align.$align"),
        config("ui-kit.components.container.options.size.$size"),
        config("ui-kit.components.container.options.color.$color"),
    );
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</{{ $as }}>

