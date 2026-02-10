<div class="relative overflow-x-auto rounded-xl border border-ui-nav-border">
    <table class="min-w-full border-collapse text-sm">
        <thead class="sticky top-0 z-10 bg-ui-app-bg border-b border-ui-nav-border">
            {{ $head }}
        </thead>

        <tbody class="divide-y divide-ui-nav-border">
            {{ $slot }}
        </tbody>
    </table>
</div>
