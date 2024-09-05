@props([
    'as' => config('ui-kit.components.button-group.props.as'),
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.button-group.classes.root'),
    );
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</{{ $as }}>