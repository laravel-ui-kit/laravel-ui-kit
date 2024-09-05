@props([
    'size' => config('ui-kit.components.table.props.size'),
])

@php
    $classes = Str::mergeClasses(
        config('ui-kit.components.table.classes.root'),
        config("ui-kit.components.table.size.$size"),
    );

    $containerClasses = Str::mergeClasses(
        config('ui-kit.components.table.classes.container'),
    );

    $headClasses = Str::mergeClasses(
        config('ui-kit.components.table.classes.head'),
    );

    $bodyClasses = Str::mergeClasses(
        config('ui-kit.components.table.classes.body'),
    );

    $footerClasses = Str::mergeClasses(
        config('ui-kit.components.table.classes.footer'),
    );
@endphp

<div class="overflow-x-auto w-full">
    <div class="{{ $containerClasses }}">
        <table {{ $attributes->merge(['class' => $classes]) }}>
            @if (isset($head))
                <thead>
                    {{ $head }}
                </thead>
            @endif

            @if (isset($body))
                <tbody class="{{ $bodyClasses }}">
                    {{ $body }}
                </tbody>
            @endif

            @if (isset($foot))
                <tfoot>
                    {{ $foot }}
                </tfoot>
            @endif
        </table>
    </div>
</div>
