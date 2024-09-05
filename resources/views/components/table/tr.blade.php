@props([
    'as' => config('ui-kit.components.tr.props.as'),
    'color' => config('ui-kit.components.tr.props.color'),
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.tr.classes.root'),
        config("ui-kit.components.tr.options.color.$color"),
    );
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</{{ $as }}>