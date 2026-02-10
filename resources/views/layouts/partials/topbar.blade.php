{{-- resources/views/layouts/partials/topbar.blade.php --}}
@php
    $appCode = session('current_app_code', 'governanca');

    // tenta resolver a rota do visual-profile por app (ex.: governanca.ui.visual-profile)
    $visualProfileEndpoint = null;

    try {
        $visualProfileEndpoint = route($appCode . '.ui.visual-profile');
    } catch (\Throwable $e) {
        // fallback canônico (caso só Governança exista por enquanto)
        try {
            $visualProfileEndpoint = route('governanca.ui.visual-profile');
        } catch (\Throwable $e2) {
            $visualProfileEndpoint = null;
        }
    }
@endphp

<header
    data-zone="navigation"
    data-theme="{{ $navigationTheme }}"
    class="h-14 bg-ui-nav-bg border-b border-ui-nav-border flex items-center px-4"
>
    <div class="flex items-center justify-between w-full">

        {{-- Esquerda: botão mobile + título --}}
        <div class="flex items-center gap-3">
            {{-- Botão do menu mobile --}}
            <button
                type="button"
                class="lg:hidden rounded-lg p-2 hover:bg-ui-nav-hover"
                x-on:click="window.dispatchEvent(new CustomEvent('ui-mobile-open'))"

                aria-label="Abrir menu"
            >
                ☰
            </button>

            {{-- Título da página --}}
            <h1 class="text-sm font-semibold text-ui-nav-title">
                {{ $title ?? 'Dashboard' }}
            </h1>
        </div>

        {{-- Direita: ações --}}
        <div class="flex items-center gap-3">

            {{-- Seletor de perfil visual --}}
            <x-ui.theme.switch
                :visual-profile="$visualProfile"
                :endpoint="$visualProfileEndpoint"
            />

            <span class="text-sm text-ui-nav-text">
                {{ auth()->user()->name ?? 'Usuário' }}
            </span>

            <button
                type="button"
                class="rounded-full h-8 w-8 bg-ui-nav-hover flex items-center justify-center text-xs"
                aria-label="Usuário"
            >
                U
            </button>
        </div>

    </div>
</header>
