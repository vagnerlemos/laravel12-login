{{-- resources/views/layouts/auth.blade.php --}}
@php
    // Perfil visual vindo do provider (quando autenticado) ou default
    $visualProfile = $visualProfile ?? 'light';

    // Resolve por zona (canônico)
    $authTheme = $uiZones['auth'] ?? 'light';
@endphp

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Login' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    x-data
    data-zone="auth"
    data-theme="{{ $authTheme }}"
    class="min-h-screen bg-ui-auth-bg text-ui-auth-text"
>
    {{-- Loader global --}}
    @include('partials.loader')

    <main class="min-h-screen flex items-center justify-center p-4">
        @yield('content')
    </main>
</body>
</html>
