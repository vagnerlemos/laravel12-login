<div
    x-data="uiModal('{{ $id }}')"
    x-show="open"
    x-cloak
    x-transition.opacity
    x-on:keydown.escape.window="closeModal()"
    class="fixed inset-0 z-[9998] flex items-center justify-center bg-black/60 backdrop-blur-sm"
     style="display:none"
>
    <div
        role="dialog"
        aria-modal="true"
        class="relative z-[9999] w-full max-w-lg rounded-xl bg-white p-6 shadow-xl"
        @click.outside="closeModal()"
        @click.stop
    >
        {{ $slot }}
    </div>
</div>
