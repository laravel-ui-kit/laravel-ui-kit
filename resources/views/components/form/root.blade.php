@props([
    'method' => config('ui-kit.components.form.props.method'),
    'csrf' => config('ui-kit.components.form.props.csrf'),
    'action' => '',
])

@php
    $formMethod = in_array($method, ['PUT', 'PATCH', 'DELETE']) ? 'POST' : $method;
    $csrf = $csrf === null ? in_array($method, ['POST', 'PUT', 'PATCH', 'DELETE']) : $csrf;
@endphp

<form {{ $attributes->merge(['method' => $formMethod, 'action' => $action]) }}>
    @if ($formMethod !== $method)
        @method($method)
    @endif

    @if ($csrf)
        @csrf
    @endif

    {{ $slot }}
</form>