@props([
    'as' => config('ui-kit.components.navbar.props.as'),
    'color' => config('ui-kit.components.navbar.props.color'),
    'containerSize' => config('ui-kit.components.navbar.props.containerSize'),
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.navbar.classes.root'),
        config("ui-kit.components.navbar.options.color.$color.root"),
    );

    $containerClasses = Str::mergeClasses(
        config('ui-kit.components.navbar.classes.container'),
        config("ui-kit.components.navbar.options.color.$color.container"),
    );

    $leftMenu = Str::mergeClasses(
        config('ui-kit.components.navbar.classes.left-menu'),
        config("ui-kit.components.navbar.options.color.$color.left-menu"),
    );

    $centerMenu = Str::mergeClasses(
        config('ui-kit.components.navbar.classes.center-menu'),
        config("ui-kit.components.navbar.options.color.$color.center-menu"),
    );

    $rightMenu = Str::mergeClasses(
        config('ui-kit.components.navbar.classes.right-menu'),
        config("ui-kit.components.navbar.options.color.$color.right-menu"),
    );

    $burgerClasses = Str::mergeClasses(
        config('ui-kit.components.navbar.classes.burger'),
        config("ui-kit.components.navbar.options.color.$color.burger"),
    );
@endphp

<{{ $as }} {{ $attributes->merge(['class' => $classes]) }}>
    <x-container class="{{ $containerClasses }}" :size="$containerSize">
        <div class="{{ $leftMenu }}">
            {{ $left ?? null }}
        </div>

        @if (isset($center))
            <div class="{{ $centerMenu }}">
                {{ $center }}
            </div>
        @endif

        <div class="{{ $rightMenu }}">
            {{ $right ?? null }}
        </div>

        @if (isset($mobile))
            <div class="{{ $burgerClasses }}">
                <x-dropdown class="text-left" align="right">
                    <x-slot name="trigger">
                        <x-navbar-item color="burger">
                            <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </x-navbar-item>
                    </x-slot>

                    {{ $mobile ?? null }}
                </x-dropdown>
            </div>
        @endif
    </x-container>
    </{{ $as }}>
