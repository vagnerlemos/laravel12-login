<div
    x-data="uiToast()"
    x-init="
        init();
        window.addEventListener('ui-toast', (e) => {
            add(e.detail.msg, e.detail.type);
        });
    "

    class="fixed top-4 right-4 z-50 space-y-2"
>
    <template x-for="toast in toasts" :key="toast.id">
        <div
            x-show="toast.visible"
            x-transition
            class="min-w-[260px] rounded-lg px-4 py-3 shadow-ui-card text-sm text-ui-toast-text"
            :class="toastClass(toast.type)"
        >
            <div class="flex items-start justify-between gap-2">
                <div x-text="toast.message"></div>

                <button
                    type="button"
                    class="opacity-70 hover:opacity-100"
                    x-on:click="remove(toast.id)"
                >
                    ✕
                </button>
            </div>
        </div>
    </template>
</div>
