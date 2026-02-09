<div
    x-data="uiModal('mobile-menu')"
    x-init="init()"
    x-show="open"
    x-cloak
    class="fixed inset-0 z-50"
>
    {{-- Overlay --}}
    <div
        class="absolute inset-0 bg-black/40"
        x-on:click="closeModal()"
        aria-hidden="true"
    ></div>

    {{-- Drawer --}}
    <aside
        class="absolute inset-y-0 left-0 w-64 bg-ui-nav-bg border-r border-ui-nav-border p-4"
        x-on:keydown.escape.window="closeModal()"
        x-trap.noscroll="open"
    >
        {{-- Header --}}
        <div class="flex items-center justify-between mb-4">
            <span class="text-lg font-semibold text-ui-nav-title">
                {{ config('app.name', 'ERP') }}
            </span>

            <button
                type="button"
                class="rounded-lg p-2 hover:bg-ui-nav-hover"
                x-on:click="closeModal()"
                aria-label="Fechar menu"
            >
                ✕
            </button>
        </div>

        {{-- Navegação (reuso da sidebar) --}}
        @include('layouts.partials.sidebar')
    </aside>
</div>
