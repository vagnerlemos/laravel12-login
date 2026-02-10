<div
    x-data="{ open: false }"
    x-show="open"
    x-on:ui-mobile-open.window="open = true"
    x-on:ui-mobile-close.window="open = false"
    x-cloak
    class="fixed inset-0 z-50 lg:hidden"
>
    {{-- Overlay --}}
    <div
        class="absolute inset-0 bg-black/40"
        x-on:click="open = false"
        aria-hidden="true"
    ></div>

    {{-- Drawer --}}
    <aside
        class="absolute inset-y-0 left-0 w-64 bg-ui-nav-bg border-r border-ui-nav-border p-4"
        x-on:keydown.escape.window="open = false"
    >
        @include('layouts.partials.sidebar')
    </aside>
</div>
