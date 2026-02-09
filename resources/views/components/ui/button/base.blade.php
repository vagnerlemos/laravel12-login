@props([
    'type' => 'button',
    'loading' => false,
    'disabled' => false,
])

<button
    type="{{ $type }}"

    {{ $disabled || $loading ? 'disabled' : '' }}

    {{ $attributes->merge([
        'class' =>
        'inline-flex items-center justify-center gap-2 rounded-lg px-4 py-2 text-sm font-medium transition
         focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-60'
    ]) }}
>

    {{-- Spinner --}}
    @if($loading)
        <span
            class="h-4 w-4 animate-spin rounded-full border-2 border-current border-t-transparent"
        ></span>
    @endif

    {{-- Label --}}
    <span>
        {{ $slot }}
    </span>

</button>
