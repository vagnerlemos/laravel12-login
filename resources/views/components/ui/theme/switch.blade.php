{{-- resources/views/components/ui/theme/switch.blade.php --}}
@props([
    'visualProfile' => 'light',
    'endpoint' => null,
])

<div
    x-data="themeSwitch('{{ $visualProfile }}', '{{ $endpoint }}')"
    class="relative"
>
    <button
        type="button"
        class="inline-flex items-center gap-2 rounded-lg border border-ui-nav-border bg-ui-nav-bg px-3 py-2 text-xs text-ui-nav-text hover:bg-ui-nav-hover"
        x-on:click="open = !open"
        aria-label="Alterar perfil visual"
    >
        <span class="font-medium">
            Perfil
        </span>

        <span class="opacity-80" x-text="options.find(o => o.value === current)?.label ?? current"></span>

        <span class="opacity-70">▾</span>
    </button>

    <div
        x-show="open"
        x-cloak
        x-transition.opacity
        class="absolute right-0 mt-2 w-52 rounded-xl border border-ui-nav-border bg-ui-nav-bg shadow-ui-card p-2 z-50"
        @click.outside="open = false"
    >
        <template x-for="opt in options" :key="opt.value">
            <button
                type="button"
                class="w-full text-left rounded-lg px-3 py-2 text-sm text-ui-nav-text hover:bg-ui-nav-hover"
                x-on:click="select(opt.value)"
            >
                <span x-text="opt.label"></span>
            </button>
        </template>

        @if (! $endpoint)
            <div class="mt-2 rounded-lg border border-ui-nav-border bg-ui-nav-hover px-3 py-2 text-[11px] text-ui-nav-text">
                Endpoint do perfil visual não configurado para este app.
            </div>
        @endif
    </div>
</div>
