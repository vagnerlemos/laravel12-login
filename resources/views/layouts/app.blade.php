<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Sistema' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body
    x-data
    class="min-h-screen bg-ui-app-bg text-ui-app-text"
>

    {{-- Loader global --}}
    @include('partials.loader')

    {{-- Mobile menu (drawer) --}}
    @include('layouts.partials.mobile-menu')

    <div class="flex min-h-screen">

        {{-- Sidebar (desktop) --}}
        <aside class="hidden lg:block w-64 shrink-0">
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
            <main class="flex-1 p-4">
                {{ $slot ?? $content ?? '' }}
                @yield('content')
            </main>

        </div>
    </div>
    <x-ui.toast.container />


</body>
</html>
