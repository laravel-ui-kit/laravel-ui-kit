@props([
    'as' => config('ui-kit.components.tabs.props.as'),
    'orientation' => config('ui-kit.components.tabs.props.orientation'),
    'color' => config('ui-kit.components.tabs.props.color'),
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.tabs.classes.root'),
        config("ui-kit.components.tabs.options.orientation.$orientation"),
        config("ui-kit.components.tabs.options.color.$color"),
    );
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</{{ $as }}>