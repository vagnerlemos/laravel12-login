@props([
    'id',
    'title' => 'Confirmar ação',
    'message' => 'Tem certeza que deseja continuar?',
    'confirmText' => 'Confirmar',
    'cancelText' => 'Cancelar',
])

<div
    x-data="uiModal('{{ $id }}')"
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

    {{-- Modal --}}
    <div
        class="absolute inset-0 flex items-center justify-center p-4"
        x-on:keydown.escape.window="closeModal()"
    >
        <div
            class="w-full max-w-sm rounded-xl bg-white shadow-ui-card p-6 space-y-4"
            x-trap.noscroll="open"
        >
            {{-- Título --}}
            <h2 class="text-lg font-semibold text-ui-modal-title">
                {{ $title }}
            </h2>

            {{-- Mensagem --}}
            <p class="text-sm text-ui-modal-text">
                {{ $message }}
            </p>

            {{-- Ações --}}
            <div class="flex justify-end gap-2 pt-2">
                <x-ui.button.secondary
                    x-on:click="closeModal()"
                >
                    {{ $cancelText }}
                </x-ui.button.secondary>

                {{ $slot }}
            </div>
        </div>
    </div>
</div>
