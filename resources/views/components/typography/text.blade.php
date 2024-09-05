@props([
    'as' => config('ui-kit.components.text.props.as'),
    'size' => config('ui-kit.components.text.props.size'),
    'align' => config('ui-kit.components.text.props.align'),
    'color' => config('ui-kit.components.text.props.color'),
    'weight' => config('ui-kit.components.text.props.weight'),
    'content' => '',
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.text.classes.root'),
        config('ui-kit.components.text.options.size')[$size],
        config('ui-kit.components.text.options.align')[$align],
        config('ui-kit.components.text.options.color')[$color],
        config('ui-kit.components.text.options.weight')[$weight],
    );
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}>{{ $content }}{{ $slot }}</{{ $as }}>
