@extends('layouts.app')

@section('content')
    <h1>Dashboard da Governança</h1>

    <p>App atual: {{ $app->label }}</p>

<button
    type="button"
    class="px-4 py-2 rounded bg-blue-600 text-white"
    x-on:click="ui.toast.info('Toast funcionando no dashboard')"
>
    Testar Toast
</button>








{{-- =========================
     TESTE MODAL CONFIRM
========================= --}}

<x-ui.button.danger
    x-on:click="ui.modal.open('test-confirm')"
>
    Testar Modal de Confirmação
</x-ui.button.danger>

<x-ui.modal.confirm
    id="test-confirm"
    title="Teste de Confirmação"
    message="Este é um teste do módulo de confirmação."
>
    <x-ui.button.danger
        x-on:click="
            ui.toast.success('Ação confirmada com sucesso');
            ui.modal.close('test-confirm');
        "
    >
        Confirmar Teste
    </x-ui.button.danger>
</x-ui.modal.confirm>

@endsection
