<x-ui.button.base
    {{ $attributes }}
    class="bg-[var(--ui-btn-ghost-bg)]
           text-[var(--ui-btn-ghost-text)]
           hover:bg-[var(--ui-btn-ghost-bg-hover)]
           focus:ring-[var(--ui-btn-ghost-ring)]"
>
    {{ $slot }}
</x-ui.button.base>
