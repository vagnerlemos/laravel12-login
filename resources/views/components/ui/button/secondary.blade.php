<x-ui.button.base
    {{ $attributes }}
    class="bg-[var(--ui-btn-secondary-bg)]
           text-[var(--ui-btn-secondary-text)]
           hover:bg-[var(--ui-btn-secondary-bg-hover)]
           focus:ring-[var(--ui-btn-secondary-ring)]"
>
    {{ $slot }}
</x-ui.button.base>
