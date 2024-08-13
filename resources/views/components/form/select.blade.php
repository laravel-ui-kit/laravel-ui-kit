@props([
    'size' => config('ui-kit.components.select.props.size'),
    'color' => config('ui-kit.components.select.props.color'),
    'value' => '',
    'items' => [],
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.select.style.root'),
        config('ui-kit.components.select.options.size')[$size],
        config('ui-kit.components.select.options.color')[$color],
    );
@endphp

<select {{ $attributes->merge(['class' => $classes]) }}>
    @foreach ($items as $_value => $label)
        <option value="{{ $_value }}" @if ($value == $_value) selected @endif>{{ $label }}</option>
    @endforeach
    {{ $slot }}
</select>