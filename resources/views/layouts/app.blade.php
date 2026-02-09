<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{ $app->label ?? 'Sistema' }}</title>
</head>

<body>
     @include('partials.loader')
     @include('partials.alerts')

    <header>
        <strong>{{ $app->label ?? 'App' }}</strong>
        <form method="POST" action="{{ route($app->code . '.logout') }}">
            @csrf
            <button type="submit">Sair</button>
        </form>
    </header>

    <main>
        @yield('content')
    </main>






</body>
</html>
