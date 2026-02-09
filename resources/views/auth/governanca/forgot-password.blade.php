@extends('layouts.auth')

@section('content')
    <x-ui.auth.container>
        <x-ui.auth.card>

            <x-ui.auth.header
                title="Recuperar senha"
                subtitle="Informe seu e-mail para receber o link"
            />

            <x-ui.form
                method="POST"
                action="{{ route('governanca.password.email') }}"
            >
                <x-ui.form.input
                    name="email"
                    type="email"
                    label="E-mail"
                    required
                    autofocus
                />

                <x-ui.button.primary
                    type="submit"
                    class="w-full"
                    x-on:click="ui.loader.show()"
                >
                    Enviar link de recuperação
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
