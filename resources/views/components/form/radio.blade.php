@props([
    'size' => config('ui-kit.components.radio.props.size'),
    'color' => config('ui-kit.components.radio.props.color'),
    'checked' => false,
    'content' => '',
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.radio.classes.root'),
        config('ui-kit.components.radio.options.size')[$size],
        config('ui-kit.components.radio.options.color')[$color],
    );
@endphp

<div class="relative flex items-center">
    <div class="flex h-6 items-center">
        <input {{ $attributes->merge(['class' => $classes, 'type' => 'radio', 'checked' => $checked]) }}>
    </div>
    <div class="ml-3 text-sm">
        <x-label for="{{ $attributes->get('id') }}" size="sm">
            {{ $content }}{{ $slot }}
        </x-label>
    </div>
</div>
