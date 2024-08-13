@props([
    'as' => config('ui-kit.components.caption.props.as'),
    'size' => config('ui-kit.components.caption.props.size'),
    'align' => config('ui-kit.components.caption.props.align'),
    'color' => config('ui-kit.components.caption.props.color'),
    'weight' => config('ui-kit.components.caption.props.weight'),
    'content' => '',
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.caption.style.root'),
        config('ui-kit.components.caption.options.size')[$size],
        config('ui-kit.components.caption.options.align')[$align],
        config('ui-kit.components.caption.options.color')[$color],
        config('ui-kit.components.caption.options.weight')[$weight],
    );
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}>{{ $content }}{{ $slot }}</{{ $as }}>