@extends('layouts.app')

@section('content')
@php
    use Illuminate\Pagination\LengthAwarePaginator;

    $items = collect(range(1, 37))->map(function ($i) {
        return (object) [
            'id' => $i,
            'name' => "Item {$i}",
            'status' => $i % 3 === 0 ? 'inactive' : 'active',
            'created_at' => now()->subDays($i)->format('Y-m-d'),
        ];
    });

    $perPage = 10;
    $page = (int) request('page', 1);
    $slice = $items->slice(($page - 1) * $perPage, $perPage)->values();

    $paginator = new LengthAwarePaginator(
        $slice,
        $items->count(),
        $perPage,
        $page,
        [
            'path' => request()->url(),
            'query' => request()->query(),
        ]
    );
@endphp

<div class="space-y-8"
    x-data="{
        ping: null,

        toast(type) {
            if (!globalThis.ui?.toast) return;
            const msg = `Toast (${type}) @ ${new Date().toLocaleTimeString()}`;
            if (type === 'success') ui.toast.success(msg);
            if (type === 'error') ui.toast.error(msg);
            if (type === 'warning') ui.toast.warning(msg);
            if (type === 'info') ui.toast.info(msg);
        },

        loader(ms = 1200) {
            if (!globalThis.ui?.loader) return;
            ui.loader.show();
            setTimeout(() => ui.loader.hide(), ms);
        },

        openModal(id) {
            if (!globalThis.ui?.modal) return;
            ui.modal.open(id);
        },

        closeModal(id) {
            if (!globalThis.ui?.modal) return;
            ui.modal.close(id);
        },

        init() {
            this.ping = 'OK';
        }
    }"
>

    {{-- =========================================================
         1) Feedback & Ações Globais
    ========================================================= --}}
    <section class="rounded-xl border border-ui-nav-border bg-ui-app-bg p-5 shadow-ui-card space-y-4">
        <h2 class="text-lg font-semibold">1) Feedback & Ações Globais</h2>

        <div class="flex flex-wrap gap-2">
            <x-ui.button.primary x-on:click="toast('info')">Toast Info</x-ui.button.primary>
            <x-ui.button.secondary x-on:click="toast('success')">Toast Success</x-ui.button.secondary>
            <x-ui.button.ghost x-on:click="toast('warning')">Toast Warning</x-ui.button.ghost>
            <x-ui.button.danger x-on:click="toast('error')">Toast Error</x-ui.button.danger>
        </div>
    </section>

    {{-- =========================================================
         2) Buttons System
    ========================================================= --}}
    <section class="rounded-xl border border-ui-nav-border bg-ui-app-bg p-5 shadow-ui-card space-y-4">
        <h2 class="text-lg font-semibold">2) Buttons System</h2>

        <div class="flex flex-wrap gap-2">
            <x-ui.button.primary>Primary</x-ui.button.primary>
            <x-ui.button.secondary>Secondary</x-ui.button.secondary>
            <x-ui.button.danger>Danger</x-ui.button.danger>
            <x-ui.button.ghost>Ghost</x-ui.button.ghost>
        </div>
    </section>

    {{-- =========================================================
         3) Forms System
    ========================================================= --}}
    <section class="rounded-xl border border-ui-nav-border bg-ui-app-bg p-5 shadow-ui-card space-y-4">
        <h2 class="text-lg font-semibold">3) Forms System</h2>

        <x-ui.form.input name="nome" label="Nome" />
        <x-ui.form.password name="senha" label="Senha" />
    </section>

    {{-- =========================================================
         4) Tables System
    ========================================================= --}}
    <section class="rounded-xl border border-ui-nav-border bg-ui-app-bg p-5 shadow-ui-card space-y-4">
        <h2 class="text-lg font-semibold">4) Tables System</h2>

        <x-ui.table>
            <x-slot:head>
                <tr>
                    <th class="px-3 py-2 text-left text-xs font-medium uppercase opacity-70">ID</th>
                    <th class="px-3 py-2 text-left text-xs font-medium uppercase opacity-70">Nome</th>
                </tr>
            </x-slot:head>

            @foreach ($paginator as $row)
                <tr>
                    <td class="px-3 py-2">{{ $row->id }}</td>
                    <td class="px-3 py-2">{{ $row->name }}</td>
                </tr>
            @endforeach
        </x-ui.table>

        <x-ui.table.pagination :paginator="$paginator" />
    </section>

    {{-- =========================================================
         5) Tokens & Zonas
    ========================================================= --}}
    <section class="rounded-xl border border-ui-nav-border bg-ui-app-bg p-5 shadow-ui-card space-y-4">
        <h2 class="text-lg font-semibold">5) Tokens & Zonas</h2>
        <x-ui.button.secondary x-on:click="ui.toast.info('Verifique visual')">
            Validar visual
        </x-ui.button.secondary>
    </section>

    {{-- =========================================================
         6) Upload System
    ========================================================= --}}
    <section class="rounded-xl border border-ui-nav-border bg-ui-app-bg p-5 shadow-ui-card space-y-4">
        <h2 class="text-lg font-semibold">6) Upload System</h2>

        <div class="grid gap-6 md:grid-cols-2">

            <div class="space-y-2">
                <div class="text-sm font-medium">Upload de Imagem (max 3MB)</div>
                <x-ui.upload
                    name="arquivo_imagem"
                    label="Selecionar imagem"
                    accept="image/*"
                    :maxSize="3"
                />
            </div>

            <div class="space-y-2">
                <div class="text-sm font-medium">Upload Genérico (max 5MB)</div>
                <x-ui.upload
                    name="arquivo_generico"
                    label="Selecionar arquivo"
                    accept="*"
                    :maxSize="5"
                />
            </div>

        </div>
    </section>

</div>
@endsection
