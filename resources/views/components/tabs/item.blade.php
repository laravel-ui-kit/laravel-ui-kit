@props([
    'as' => config('ui-kit.components.tab.props.as'),
    'orientation' => config('ui-kit.components.tab.props.orientation'),
    'color' => config('ui-kit.components.tab.props.color'),
    'active' => config('ui-kit.components.tab.props.active'),
    'disabled' => config('ui-kit.components.tab.props.disabled'),
    'content' => '',
    'containerClasses' => '',
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.tab.style.root'),
        config("ui-kit.components.tab.options.orientation.$orientation"),
        $active 
            ? config("ui-kit.components.tab.options.color.$color.active") 
            : config("ui-kit.components.tab.options.color.$color.not-active"),
        $disabled
            ? config("ui-kit.components.tab.options.color.$color.disabled")
            : config("ui-kit.components.tab.options.color.$color.not-disabled"),
    );
@endphp

<{{ $as }} {{ $attributes->merge([
    'class' => $classes,
    'aria-current' => $active ? 'page' : null,
])}}>
    {{ $content }}{{ $slot }}
</{{ $as }}>