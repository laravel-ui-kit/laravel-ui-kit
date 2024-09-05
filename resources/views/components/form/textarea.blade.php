@props([
    'size' => config('ui-kit.components.textarea.props.size'),
    'color' => config('ui-kit.components.textarea.props.color'),
    'maxHeight' => config('ui-kit.components.textarea.props.maxHeight'),
    'content' => '',
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.textarea.classes.root'),
        config('ui-kit.components.textarea.options.size')[$size],
        config('ui-kit.components.textarea.options.color')[$color],
        config('ui-kit.components.textarea.options.maxHeight')[$maxHeight],
    );
@endphp

<textarea {{ $attributes->merge(['class' => $classes]) }}>{{ $content }}</textarea>