<div
    x-data="{ open: false }"

    x-on:ui-loader-show.window="open = true"
    x-on:ui-loader-hide.window="open = false"

    x-show="open"
    x-transition.opacity

    role="alert"
    aria-busy="true"
    aria-live="assertive"

    class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/60 backdrop-blur-sm"
    style="display:none"
>

    <div class="flex flex-col items-center gap-3">

        <!-- Spinner -->
        <div
            class="h-10 w-10 animate-spin rounded-full border-4 border-white/30 border-t-white"
        ></div>

        <!-- Texto -->
        <span class="text-sm text-white/80">
            Processando...
        </span>

    </div>
</div>
