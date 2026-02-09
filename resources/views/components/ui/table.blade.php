@props([
    'title' => 'Nenhum registro encontrado',
    'description' => 'Não há dados para exibir no momento.',
])

<div class="flex flex-col items-center justify-center py-12 text-center">
    <div class="text-sm font-medium text-ui-table-text">
        {{ $title }}
    </div>

    <p class="mt-1 text-sm text-ui-nav-text">
        {{ $description }}
    </p>

    {{ $slot }}
</div>
