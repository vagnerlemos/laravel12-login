<div class="ui-table w-full overflow-x-auto">
    <table class="min-w-full border-collapse text-sm">
        <thead class="bg-ui-table-head">
            {{ $head ?? '' }}
        </thead>

        <tbody class="divide-y divide-ui-table-border">
            {{ $slot }}
        </tbody>
    </table>

    @if (isset($pagination))
        <div class="mt-3">
            {{ $pagination }}
        </div>
    @endif
</div>
