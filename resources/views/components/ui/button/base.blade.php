@props([
    'type' => 'button',
])

<button
    type="{{ $type }}"
    {{ $attributes->merge([
        'class' =>
        'inline-flex items-center justify-center gap-2
         cursor-pointer
         rounded-[var(--ui-btn-radius)]
         px-[var(--ui-btn-px)] py-[var(--ui-btn-py)]
         text-[var(--ui-btn-font-size)] font-[var(--ui-btn-font-weight)]
         transition
         focus:outline-none
         focus:ring-[var(--ui-btn-ring-width)]
         focus:ring-offset-[var(--ui-btn-ring-offset)]
         disabled:cursor-not-allowed
         disabled:opacity-[var(--ui-btn-disabled-opacity)]'
    ]) }}
>
    <span class="ui-btn-spinner hidden"></span>

    <span class="ui-btn-label">
        {{ $slot }}
    </span>
</button>
