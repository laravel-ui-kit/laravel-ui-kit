@props([
    'as' => config('ui-kit.components.list.props.as'),
    'type' => config('ui-kit.components.list.props.type'),
    'size' => config('ui-kit.components.list.props.size'),
    'align' => config('ui-kit.components.list.props.align'),
    'color' => config('ui-kit.components.list.props.color'),
    'items' => [],
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.list.style.root'),
        config('ui-kit.components.list.options.type')[$type],
        config('ui-kit.components.list.options.size')[$size],
        config('ui-kit.components.list.options.align')[$align],
        config('ui-kit.components.list.options.color')[$color],
    );
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}>
    @foreach ($items as $item)
        <li>{{ $item }}</li>
    @endforeach
    {{ $slot }}
</{{ $as }}>