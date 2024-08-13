@props([
    'as' => config('ui-kit.components.button.props.as'),
    'color' => config('ui-kit.components.button.props.color'),
    'size' => config('ui-kit.components.button.props.size'),
    'hasDropdown' => false,
    'content' => '',
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.button.style.root'),
        config('ui-kit.components.button.options.color')[$color],
        config('ui-kit.components.button.options.size')[$size],
    );
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes])}}>{{ $content }}{{ $slot }}
@if ($hasDropdown)
    <svg :class="{ 'rotate-180': open, 'rotate-0': !open }" xmlns="http://www.w3.org/2000/svg"
        class="inline h-4 transition-transform duration-200 transform icon icon-tabler icon-tabler-chevron-down"
        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
        stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M6 9l6 6l6 -6"></path>
    </svg>
@endif</{{ $as }}>