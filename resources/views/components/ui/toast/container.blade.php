<div
    x-data="uiToast"
    class="fixed top-4 right-4 z-[9999] space-y-2"
>
    <template x-for="toast in toasts" :key="toast.id">
        <div
            x-show="toast.visible"
            x-transition.opacity.duration.300ms
            :data-toast-type="toast.type"
            class="ui-toast min-w-[260px] rounded-lg px-4 py-3 shadow-ui-card text-sm"
        >
            <div class="flex items-start justify-between gap-3">
                <span x-text="toast.message"></span>

                <button
                    type="button"
                    class="opacity-70 hover:opacity-100"
                    x-on:click="remove(toast.id)"
                    aria-label="Fechar"
                >
                    ✕
                </button>
            </div>
        </div>
    </template>
</div>
