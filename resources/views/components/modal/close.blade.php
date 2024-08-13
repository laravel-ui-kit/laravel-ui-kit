@props([
    'as' => config('ui-kit.components.modal.props.cancel.as'),
])

<div {{ $attributes->merge([
    'class' => config("ui-kit.components.modal-close.style.root"),
    'x-on:click' => 'open = false', 
]) }}>
    {{ $slot }}
</div>