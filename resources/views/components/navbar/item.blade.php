@props([
    'as' => config('ui-kit.components.navbar-item.props.as'),
    'color' => config('ui-kit.components.navbar-item.props.color'),
    'href' => null,
    'content' => '',
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.navbar-item.classes.root'),
        config("ui-kit.components.navbar-item.options.color.$color"),
    );
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes, 'href' => $href]) }}>
    {{ $content }}{{ $slot }}
</{{ $as }}>