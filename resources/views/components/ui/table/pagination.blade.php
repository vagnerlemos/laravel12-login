@props([
    'paginator',
])

@if ($paginator->hasPages())
    <div class="flex items-center justify-between px-2 py-3 border-t border-ui-table-border text-sm">

        {{-- Informações --}}
        <div class="text-ui-nav-text">
            Mostrando
            <span class="font-medium">{{ $paginator->firstItem() }}</span>
            a
            <span class="font-medium">{{ $paginator->lastItem() }}</span>
            de
            <span class="font-medium">{{ $paginator->total() }}</span>
            registros
        </div>

        {{-- Navegação --}}
        <div class="flex items-center gap-1">
            {{-- Anterior --}}
            @if ($paginator->onFirstPage())
                <span class="px-3 py-1 rounded-md text-ui-nav-text opacity-50">
                    Anterior
                </span>
            @else
                <a
                    href="{{ $paginator->previousPageUrl() }}"
                    class="px-3 py-1 rounded-md hover:bg-ui-nav-hover text-ui-nav-text"
                >
                    Anterior
                </a>
            @endif

            {{-- Próxima --}}
            @if ($paginator->hasMorePages())
                <a
                    href="{{ $paginator->nextPageUrl() }}"
                    class="px-3 py-1 rounded-md hover:bg-ui-nav-hover text-ui-nav-text"
                >
                    Próxima
                </a>
            @else
                <span class="px-3 py-1 rounded-md text-ui-nav-text opacity-50">
                    Próxima
                </span>
            @endif
        </div>
    </div>
@endif
