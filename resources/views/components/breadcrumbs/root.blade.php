@props([
    'as' => config('ui-kit.components.breadcrumbs.props.as'),
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.breadcrumbs.classes.root'),
    );

    $containerClasses = Str::mergeClasses(
        config('ui-kit.components.breadcrumbs.classes.container'),
    );
@endphp

<{{ $as }} class="{{ $containerClasses }}">
    <ol {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </ol>
</{{ $as }}>