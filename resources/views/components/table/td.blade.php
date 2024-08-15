@props([
    'as' => config('ui-kit.components.td.props.as'),
    'color' => config('ui-kit.components.td.props.color'),
    'align' => config('ui-kit.components.td.props.align'),
    'size' => config('ui-kit.components.td.props.size'),
    'weight' => config('ui-kit.components.td.props.weight'),
    'content' => '',
    'href' => null,
])

@php
$classes = Str::mergeClasses(
    config('ui-kit.components.td.style.root'),
    config("ui-kit.components.td.options.color.$color"),
    config("ui-kit.components.td.options.align.$align"),
    config("ui-kit.components.td.options.size.$size"),
    config("ui-kit.components.td.options.weight.$weight"),
);

$hrefClasses = Str::mergeClasses(
    config('ui-kit.components.td.style.href'),
    config("ui-kit.components.td.options.color.$color.href"),
    config("ui-kit.components.td.options.size.$size.href"),
);

@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}>
@if ($href)
<a href="{{ $href }}" class="{{ $hrefClasses }}"></a>
@endif
{{ $content }}{{ $slot }}
</{{ $as }}>
