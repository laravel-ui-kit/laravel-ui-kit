@props([
    'href' => null,
    'color' => config('ui-kit.components.breadcrumb.props.color'),
    'content' => '',
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.breadcrumb.classes.root'),
        config("ui-kit.components.breadcrumb.options.color.{$color}.root"),
    );

    $iconClasses = Str::mergeClasses(
        config('ui-kit.components.breadcrumb.classes.icon'),
        config("ui-kit.components.breadcrumb.options.color.{$color}.icon"),
    );

    $containerClasses = Str::mergeClasses(
        config('ui-kit.components.breadcrumb.classes.container'),
    );
@endphp

<li class="group">
    <div class="{{ $containerClasses }}">
        <svg class="{{ $iconClasses }}" viewBox="0 0 20 20"
            fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd"
                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                clip-rule="evenodd"></path>
        </svg>
        <a {{ $attributes->merge(['href' => $href, 'class' => $classes]) }}>
            {{ $content }}{{ $slot }}
        </a> 
    </div>
</li>
