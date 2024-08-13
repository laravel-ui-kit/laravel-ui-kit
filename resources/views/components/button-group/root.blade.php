@props([
    'as' => config('ui-kit.components.button-group.props.as'),
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.button-group.style.root'),
    );
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</{{ $as }}>