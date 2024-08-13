@props([
    'id', 
    'title' => '', 
    'color' => config('ui-kit.components.accordion-item.props.color')
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.accordion-item.style.root'),
        config("ui-kit.components.accordion-item.options.color.$color.root"),
    );

    $buttonClasses = Str::mergeClasses(
        config('ui-kit.components.accordion-item.style.button'),
        config("ui-kit.components.accordion-item.options.color.$color.button"),
    );

    $textClasses = Str::mergeClasses(config('ui-kit.components.accordion-item.style.text'));

    $iconClasses = Str::mergeClasses(config('ui-kit.components.accordion-item.style.icon'));

    $contentClasses = Str::mergeClasses(config('ui-kit.components.accordion-item.style.content'));
@endphp

<li {{ $attributes->merge(['class' => $classes]) }}>
    <button type="button" class="{{ $buttonClasses }}"
        @click="selected !== '{{ $id }}' ? selected = '{{ $id }}' : selected = null">
        <p class="{{ $textClasses }}">
            {{ $title }}{{ isset($trigger) ? $trigger : '' }}
        </p>

        <svg :class="{ 'rotate-180': selected != '{{ $id }}', 'rotate-0': selected == '{{ $id }}' }"
            xmlns="http://www.w3.org/2000/svg" class="{{ $iconClasses }}" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                clip-rule="evenodd"></path>
        </svg>
    </button>

    <div class="relative overflow-hidden transition-all duration-700 max-h-0" style="" x-ref="container1"
        x-bind:style="selected == '{{ $id }}' ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
        <div class="{{ $contentClasses }}">
            {{ $slot }}
        </div>
    </div>
</li>
