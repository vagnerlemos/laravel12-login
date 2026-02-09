@extends('layouts.app')

@section('content')
    <h1>Dashboard do CMS</h1>

    <p>App atual: {{ $app->label }}</p>










<br><br><br><br>
-------------------------------------------------------------------
<br><br><br><br>



<x-ui.button.primary onclick="ui.modal.open('confirmTest')">
    Abrir Modal
</x-ui.button.primary>

<x-ui.modal id="confirmTest">
    <x-slot:title>
        Teste de Modal
    </x-slot:title>

    Modal funcionando corretamente.

    <x-slot:footer>
        <x-ui.button.secondary @click="closeModal()">
    Fechar
</x-ui.button.secondary>

    </x-slot:footer>
</x-ui.modal>

<br><br><br><br>
-------------------------------------------------------------------
<br><br><br><br>

<div class="p-6 bg-blue-600 text-white">
    Teste Tailwind
</div>

<div x-data="{ open:false }" class="mt-6">

    <button
        class="px-3 py-2 bg-gray-800 text-white rounded"
        @click="open = !open"
    >
        Toggle
    </button>

    <div
        x-show="open"
        x-transition
        class="mt-3 rounded bg-green-100 p-3 text-green-800"
    >
        OK Alpine Funcionando
    </div>

</div>
<form method="POST" action="{{ route('cms.__test') }}" class="mt-6 space-y-4">
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









@endsection
