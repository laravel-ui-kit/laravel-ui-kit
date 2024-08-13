@props([
    'color' => config('ui-kit.components.accordion.props.color'),
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.accordion.style.root'),
        config("ui-kit.components.accordion.options.color.$color"),
    );
@endphp

<div {{ $attributes->merge(['class' => $classes]) }} x-data="{ selected: null }">
    <ul class="list-none" role="list" @click="open = !open">
        {{ $slot }}
    </ul>
</div>
