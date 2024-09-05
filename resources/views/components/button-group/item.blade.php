@props([
    'as' => config('ui-kit.components.button-group-item.props.as'),
    'color' => config('ui-kit.components.button-group-item.props.color'),
    'size' => config('ui-kit.components.button-group-item.props.size'),
    'content' => '',
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.button-group-item.classes.root'),
    );
@endphp

<x-button :as="$as" :color="$color" :size="$size" :content="$content" :attributes="$attributes->merge(['class' => $classes])">{{ $slot }}</x-button>