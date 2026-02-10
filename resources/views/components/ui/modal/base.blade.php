<div
    x-data="uiModal('{{ $id }}')"
    x-show="open"
    x-cloak
    class="fixed inset-0 z-50"
>
    {{-- OVERLAY (ÚNICO ELEMENTO CLICÁVEL FORA DO MODAL) --}}
    <div
        class="absolute inset-0 bg-black/40"
        x-on:click="closeModal()"
        aria-hidden="true"
    ></div>

    {{-- WRAPPER (NÃO RECEBE CLIQUES) --}}
    <div
        class="absolute inset-0 flex items-center justify-center p-4 pointer-events-none"
        x-on:keydown.escape.window="closeModal()"
    >
        {{-- CAIXA DO MODAL (RECEBE CLIQUES) --}}
        <div
            class="w-full max-w-md rounded-xl bg-white shadow-ui-card p-6 space-y-4 pointer-events-auto"
            x-trap.noscroll="open"
        >
            @if (!empty($title))
                <h2 class="text-lg font-semibold text-ui-modal-title">
                    {{ $title }}
                </h2>
            @endif

            {{ $slot }}
        </div>
    </div>
</div>
