<form method="POST" action="{{ route('cms.__test-form') }}" class="mt-6 space-y-4">
    @csrf

    <x-ui.form.input
        name="email"
        label="E-mail"
        type="email"
        required
    />

    <x-ui.form.password
        name="password"
        label="Senha"
        required
    />

    <x-ui.form.select
        name="profile"
        label="Perfil"
        :options="[
            '' => 'Selecione...',
            'admin' => 'Administrador',
            'user' => 'Usuário',
        ]"
        required
    />

    <x-ui.form.textarea
        name="notes"
        label="Observações"
        rows="4"
    />

    <x-ui.button.primary type="submit" class="w-full">
        Enviar teste
    </x-ui.button.primary>
</form>




<button
    class="mt-6 rounded bg-blue-600 px-4 py-2 text-white"
    onclick="ui.loader.show()"
>
    Mostrar Loader
</button>

<button
    class="mt-3 rounded bg-gray-700 px-4 py-2 text-white"
    onclick="ui.loader.hide()"
>
    Esconder Loader
</button>

<div class="mt-6 flex gap-3">

    <x-ui.button.primary>
        Salvar
    </x-ui.button.primary>

    <x-ui.button.secondary>
        Cancelar
    </x-ui.button.secondary>

    <x-ui.button.danger>
        Excluir
    </x-ui.button.danger>

    <x-ui.button.ghost>
        Ver
    </x-ui.button.ghost>

</div>
