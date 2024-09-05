@props([
    'as' => config('ui-kit.components.alert.props.as'),
    'size' => config('ui-kit.components.alert.props.size'),
    'color' => config('ui-kit.components.alert.props.color'),
    'content' => '',
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.alert.classes.root'),
        config("ui-kit.components.alert.options.size.$size"),
        config("ui-kit.components.alert.options.color.$color"),
    );
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $content }}{{ $slot }}
</{{ $as }}>
