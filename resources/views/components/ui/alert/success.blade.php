<div
    role="alert"
    aria-live="polite"
    class="rounded-lg border border-green-300 bg-green-50 text-green-800 px-4 py-3 flex items-start justify-between gap-4"
>
    <div class="text-sm">
        {{ $slot }}
    </div>

    <button
        type="button"
        class="text-green-600 hover:text-green-800"
        onclick="this.parentElement.remove()"
        aria-label="Fechar mensagem"
    >
        ✕
    </button>
</div>
