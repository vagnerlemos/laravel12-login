{{-- resources/views/layouts/app.blade.php --}}
@php
    // Perfil visual vindo do provider
    $visualProfile = $visualProfile ?? 'light';

    // Defaults
    $appTheme = 'light';
    $navigationTheme = 'light';
    $contentTheme = 'light';

    switch ($visualProfile) {
        case 'dark':
            $appTheme = 'dark';
            $navigationTheme = 'dark';
            $contentTheme = 'dark';
            break;

        case 'mixed-nav-dark':
            $appTheme = 'light';
            $navigationTheme = 'dark';
            $contentTheme = 'light';
            break;

        case 'mixed-content-dark':
            $appTheme = 'dark';
            $navigationTheme = 'light';
            $contentTheme = 'dark';
            break;
    }
@endphp

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Sistema' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    x-data
    data-zone="app"
    data-theme="{{ $appTheme }}"
    class="min-h-screen bg-ui-app-bg text-ui-app-text"
>
    {{-- Loader global --}}
    @include('partials.loader')

    {{-- Mobile menu (drawer) --}}
    @include('layouts.partials.mobile-menu')

    <div class="flex min-h-screen">
        {{-- Sidebar (desktop) --}}
        <aside
            data-zone="navigation"
            data-theme="{{ $navigationTheme }}"
            class="hidden lg:block w-64 shrink-0"
        >
            @include('layouts.partials.sidebar')
        </aside>

        {{-- Área principal --}}
        <div class="flex-1 flex flex-col">
            {{-- Topbar --}}
            @include('layouts.partials.topbar')

            {{-- Breadcrumb --}}
            @include('layouts.partials.breadcrumb')

            {{-- Alerts globais (somente sistema interno) --}}
            @include('partials.alerts')

            {{-- Conteúdo --}}
            <main
                data-zone="content"
                data-theme="{{ $contentTheme }}"
                class="flex-1 p-4"
            >
                {{ $slot ?? $content ?? '' }}
                @yield('content')
            </main>
        </div>
    </div>

    <x-ui.toast.container />
</body>
</html>
