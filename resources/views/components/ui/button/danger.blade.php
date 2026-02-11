<x-ui.button.base
    {{ $attributes }}
    class="bg-[var(--ui-btn-danger-bg)]
           text-[var(--ui-btn-danger-text)]
           hover:bg-[var(--ui-btn-danger-bg-hover)]
           focus:ring-[var(--ui-btn-danger-ring)]"
>
    {{ $slot }}
</x-ui.button.base>
