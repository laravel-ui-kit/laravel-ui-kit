@props([
    'as' => 'button',
])

@php
    $classes = 'border-t border-white/5';
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</{{ $as }}>