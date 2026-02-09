<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Login — Vendas</title>

    {{-- CSS funcional global --}}
    @vite('resources/css/app.css')

    {{-- CSS visual exclusivo da Vendas --}}
    @vite('resources/css/vendas/auth/login.css')

</head>
<body class="auth auth-vendas">
    <main class="auth-container">
        <section class="auth-card">
            <h1>Vendas</h1>
            <p>Acesso administrativo</p>

            @if ($errors->any())
                <div class="auth-error">
                    {{ __('auth.failed') }}
                </div>
            @endif

            <form method="POST" action="{{ route('vendas.login.submit') }}" novalidate>
                @csrf

                <div class="field">
                    <label for="email">E-mail</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                    >
                </div>

                <div class="field">
                    <label for="password">Senha</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        required
                    >
                </div>

                <button type="submit" class="btn-primary">
                    Entrar
                </button>
            </form>
        </section>
    </main>

    {{-- JS funcional global --}}
    @vite('resources/js/app.js')
</body>
</html>
