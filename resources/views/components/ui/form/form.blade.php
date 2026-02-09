{{-- resources/views/components/ui/form.blade.php --}}
@props([
    'method' => 'POST',
    'action',
])

<form method="{{ strtolower($method) === 'get' ? 'GET' : 'POST' }}" action="{{ $action }}" {{ $attributes->merge(['class' => 'space-y-4']) }}>
    @csrf

    @if (! in_array(strtoupper($method), ['GET', 'POST']))
        @method($method)
    @endif

    {{ $slot }}
</form>
