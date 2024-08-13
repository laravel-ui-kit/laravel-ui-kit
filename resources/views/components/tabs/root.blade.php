@props([
    'orientation' => config('ui-kit.components.tabs.props.orientation'),
    'color' => config('ui-kit.components.tabs.props.color'),
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.tabs.style.root'),
        config("ui-kit.components.tabs.options.orientation.$orientation"),
        config("ui-kit.components.tabs.options.color.$color"),
    );
@endphp

<ul {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</ul>