@extends('layouts.auth')

@section('content')
    <x-ui.auth.container>
        <x-ui.auth.card>

            <x-ui.auth.header
                title="Acesso à Governança"
                subtitle="Área administrativa do sistema"
            />

            <x-ui.form
    method="POST"
    action="{{ route('governanca.login.submit') }}"
    x-data="{ submitting: false }"
    x-on:submit.prevent="
        if (submitting) return;
        submitting = true;
        ui.loader.show();
        $el.submit();
    "
>

                <x-ui.form.input
                    name="email"
                    type="email"
                    label="E-mail"
                    required
                    autofocus
                />

                <x-ui.form.password
                    name="password"
                    label="Senha"
                    required
                />

                <x-ui.button.primary
                    type="submit"
                    class="w-full"

                >
                    Entrar
                </x-ui.button.primary>
            </x-ui.form>

            <div class="text-center">
                <a
                    href="{{ route('governanca.password.request') }}"
                    class="text-sm underline text-ui-auth-subtitle"
                >
                    Esqueci minha senha
                </a>
            </div>

        </x-ui.auth.card>
    </x-ui.auth.container>
@endsection
