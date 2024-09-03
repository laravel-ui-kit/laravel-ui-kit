@props([
    'size' => config('ui-kit.components.modal.props.size'),
    'color' => config('ui-kit.components.modal.props.color'),
    'closable' => config('ui-kit.components.modal.props.closable'),
    'open' => false,
    'name' => null,
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.modal.style.root'),
        config("ui-kit.components.modal.options.size.{$size}"),
        config("ui-kit.components.modal.options.color.{$color}"),
    );

    $containerClasses = Str::mergeClasses(config('ui-kit.components.modal.style.container'));

    $overlayClasses = Str::mergeClasses(config('ui-kit.components.modal.style.overlay'));
@endphp

<div x-data="{ open: {{ is_bool($open) ? ($open ? 'true' : 'false') : $open }} }" x-init="$watch('open', function(value) {
    if (value === true) { document.body.classList.add('overflow-hidden') } else { document.body.classList.remove('overflow-hidden') }
});"
    @if ($name) x-on:open-modal.window="$event.detail == '{{ $name }}' ? open = true : null"
    x-on:close-modal.window="$event.detail == '{{ $name }}' ? open = false : null"
    x-on:toggle-modal.window="$event.detail == '{{ $name }}' ? open = !open : null" @endif>
    @isset($trigger)
        <span x-on:click="open = true">
            {{ $trigger }}
        </span>
    @endisset

    <div x-show="open" x-on:keydown.escape.prevent.stop="open = false" role="dialog" aria-modal="true"
        x-id="['modal-title']" :aria-labelledby="$id('modal-title')" class="fixed inset-0 z-50 w-screen overflow-y-auto"
        aria-labelledby="modal-title-1" style="display: none;">

        <!-- Overlay -->
        <div x-show="open" x-transition.opacity="" class="{{ $overlayClasses }}" style="display: none;">
        </div>

        {{-- Content --}}
        <div x-show="open" x-transition="" @if ($closable) x-on:click="open = false" @endif
            class="relative flex min-h-screen items-center justify-center p-4" style="display: none;">
            <div x-on:click.stop="" class="{{ $classes }}">
                <div class="{{ $containerClasses }}">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
