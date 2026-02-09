@extends('layouts.auth')

@section('content')
    <x-ui.auth.container>
        <x-ui.auth.card>

            <x-ui.auth.header
                title="Definir nova senha"
                subtitle="Escolha uma nova senha para sua conta"
            />

            <x-ui.form
                method="POST"
                action="{{ route('governanca.password.update') }}"
            >
                <input type="hidden" name="token" value="{{ $token }}">

                <x-ui.form.input
                    name="email"
                    type="email"
                    label="E-mail"
                    required
                    autofocus
                />

                <x-ui.form.password
                    name="password"
                    label="Nova senha"
                    required
                />

                <x-ui.form.password
                    name="password_confirmation"
                    label="Confirmar senha"
                    required
                />

                <x-ui.button.primary
                    type="submit"
                    class="w-full"
                    x-on:click="ui.loader.show()"
                >
                    Redefinir senha
                </x-ui.button.primary>
            </x-ui.form>

            <div class="text-center">
                <a
                    href="{{ route('governanca.login') }}"
                    class="text-sm underline text-ui-auth-subtitle"
                >
                    Voltar ao login
                </a>
            </div>

        </x-ui.auth.card>
    </x-ui.auth.container>
@endsection
