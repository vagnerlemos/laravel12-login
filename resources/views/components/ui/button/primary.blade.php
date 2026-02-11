<x-ui.button.base
    {{ $attributes }}
    class="bg-[var(--ui-btn-primary-bg)]
           text-[var(--ui-btn-primary-text)]
           hover:bg-[var(--ui-btn-primary-bg-hover)]
           focus:ring-[var(--ui-btn-primary-ring)]"
>
    {{ $slot }}
</x-ui.button.base>
