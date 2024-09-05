@props([
    'as' => config('ui-kit.components.sidebar.props.as'),
    'size' => config('ui-kit.components.sidebar.props.size'),
    'color' => config('ui-kit.components.sidebar.props.color'),
    'variant' => config('ui-kit.components.sidebar.props.variant'),
    'containerClasses' => '',
    'containerOpenClasses' => '',
    'containerHiddenClasses' => '',
    'overlayClasses' => '',
    'mobileNavbarClasses' => '',
    'burgerClasses' => '',
    'burgerIconClasses' => '',
    'closeClasses' => '',
    'contentClasses' => '',
    'contentTopClasses' => '',
    'contentBottomClasses' => '',
    'openBodyClasses' => '',
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.sidebar.classes.root'),
        config("ui-kit.components.sidebar.options.size.{$size}.root"),
        config("ui-kit.components.sidebar.options.color.{$color}.root"),
        config("ui-kit.components.sidebar.options.variant.{$variant}.root"),
    );

    $containerClasses = Str::mergeClasses(
        config('ui-kit.components.sidebar.classes.container'),
        config("ui-kit.components.sidebar.options.size.{$size}.container"),
        config("ui-kit.components.sidebar.options.color.{$color}.container"),
        config("ui-kit.components.sidebar.options.variant.{$variant}.container"),
        $containerClasses,
    );

    $containerOpenClasses = Str::mergeClasses(
        config('ui-kit.components.sidebar.classes.container-open'),
        config("ui-kit.components.sidebar.options.size.{$size}.container-open"),
        config("ui-kit.components.sidebar.options.color.{$color}.container-open"),
        config("ui-kit.components.sidebar.options.variant.{$variant}.container-open"),
        $containerOpenClasses,
    );

    $containerHiddenClasses = Str::mergeClasses(
        config('ui-kit.components.sidebar.classes.container-hidden'),
        config("ui-kit.components.sidebar.options.size.{$size}.container-hidden"),
        config("ui-kit.components.sidebar.options.color.{$color}.container-hidden"),
        config("ui-kit.components.sidebar.options.variant.{$variant}.container-hidden"),
        $containerHiddenClasses,
    );

    $overlayClasses = Str::mergeClasses(
        config('ui-kit.components.sidebar.classes.overlay'),
        config("ui-kit.components.sidebar.options.size.{$size}.overlay"),
        config("ui-kit.components.sidebar.options.color.{$color}.overlay"),
        config("ui-kit.components.sidebar.options.variant.{$variant}.overlay"),
        $overlayClasses,
    );

    $mobileNavbarClasses = Str::mergeClasses(
        config('ui-kit.components.sidebar.classes.mobile-navbar'),
        config("ui-kit.components.sidebar.options.size.{$size}.mobile-navbar"),
        config("ui-kit.components.sidebar.options.color.{$color}.mobile-navbar"),
        config("ui-kit.components.sidebar.options.variant.{$variant}.mobile-navbar"),
        $mobileNavbarClasses,
    );

    $burgerClasses = Str::mergeClasses(
        config('ui-kit.components.sidebar.classes.burger'),
        config("ui-kit.components.sidebar.options.size.{$size}.burger"),
        config("ui-kit.components.sidebar.options.color.{$color}.burger"),
        config("ui-kit.components.sidebar.options.variant.{$variant}.burger"),
        $burgerClasses,
    );

    $burgerIconClasses = Str::mergeClasses(
        config('ui-kit.components.sidebar.classes.burger-icon'),
        config("ui-kit.components.sidebar.options.size.{$size}.burger-icon"),
        config("ui-kit.components.sidebar.options.color.{$color}.burger-icon"),
        config("ui-kit.components.sidebar.options.variant.{$variant}.burger-icon"),
        $burgerIconClasses,
    );

    $closeClasses = Str::mergeClasses(
        config('ui-kit.components.sidebar.classes.close'),
        config("ui-kit.components.sidebar.options.size.{$size}.close"),
        config("ui-kit.components.sidebar.options.color.{$color}.close"),
        config("ui-kit.components.sidebar.options.variant.{$variant}.close"),
        $closeClasses,
    );

    $contentClasses = Str::mergeClasses(
        config('ui-kit.components.sidebar.classes.content'),
        config("ui-kit.components.sidebar.options.size.{$size}.content"),
        config("ui-kit.components.sidebar.options.color.{$color}.content"),
        config("ui-kit.components.sidebar.options.variant.{$variant}.content"),
        $contentClasses,
    );

    $contentTopClasses = Str::mergeClasses(
        config('ui-kit.components.sidebar.classes.content-top'),
        config("ui-kit.components.sidebar.options.size.{$size}.content-top"),
        config("ui-kit.components.sidebar.options.color.{$color}.content-top"),
        config("ui-kit.components.sidebar.options.variant.{$variant}.content-top"),
        $contentTopClasses,
    );

    $contentBottomClasses = Str::mergeClasses(
        config('ui-kit.components.sidebar.classes.content-top'),
        config("ui-kit.components.sidebar.options.size.{$size}.content-bottom"),
        config("ui-kit.components.sidebar.options.color.{$color}.content-bottom"),
        config("ui-kit.components.sidebar.options.variant.{$variant}.content-bottom"),
        $contentBottomClasses,
    );

    $openBodyClasses = Str::mergeClasses(
        config('ui-kit.components.sidebar.classes.open-body'),
        config("ui-kit.components.sidebar.options.size.{$size}.open-body"),
        config("ui-kit.components.sidebar.options.color.{$color}.open-body"),
        config("ui-kit.components.sidebar.options.variant.{$variant}.open-body"),
        $openBodyClasses,
    );
@endphp

<div x-data="{ open: false }" x-init="$watch('open', function(value) {
    if (value === true) { 
        @foreach (explode(' ', $openBodyClasses) as $class)
            @if (trim($class) == '')
                @continue
            @endif
            document.body.classList.add('{{ $class }}');
        @endforeach
    } else { 
        @foreach (explode(' ', $openBodyClasses) as $class)
            @if (trim($class) == '')
                @continue
            @endif
            document.body.classList.remove('{{ $class }}');
        @endforeach 
    }
});" {{ $attributes->merge(['class' => $classes]) }}>
    <div class="{{ $overlayClasses }}" x-show="open" x-on:click="open = false"></div>

    <div class="{{ $mobileNavbarClasses }}">
        <button
            class="{{ $burgerClasses }}"
            x-on:click="open = !open">
            <svg class="{{ $burgerIconClasses }}" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
            </svg>
        </button>
    </div>

    <nav class="{{ $containerClasses }}"
        x-bind:class="{
            '{{ $containerOpenClasses }}': open,
            '{{ $containerHiddenClasses }}': !open
        }">
        <button class="{{ $closeClasses }}" x-on:click="open = false"
            x-show="open">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="feather feather-x">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>

        <div class="{{ $contentClasses }}">
            <div class="{{ $contentTopClasses }}">
                {{ $slot }}
            </div>
            
            @isset($bottom)
                <div class="{{ $contentBottomClasses }}">
                    {{ $bottom }}
                </div>
            @endisset
        </div>
    </nav>
</div>