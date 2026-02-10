@extends('layouts.app')

@section('content')
@php
    use Illuminate\Pagination\LengthAwarePaginator;

    // Dataset fake para testar <x-ui.table> + paginação
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

<div
    class="space-y-8"
    x-data="{
        ping: null,

        toast(type) {
            if (!window.ui?.toast) return;

            const msg = `Toast (${type}) @ ${new Date().toLocaleTimeString()}`;

            if (type === 'success') ui.toast.success(msg);
            if (type === 'error') ui.toast.error(msg);
            if (type === 'warning') ui.toast.warning(msg);
            if (type === 'info') ui.toast.info(msg);
        },

        loader(ms = 1200) {
            if (!window.ui?.loader) return;

            ui.loader.show();
            setTimeout(() => ui.loader.hide(), ms);
        },

        openModal(id) {
            if (!window.ui?.modal) return;
            ui.modal.open(id);
        },

        closeModal(id) {
            if (!window.ui?.modal) return;
            ui.modal.close(id);
        },

        // Sanidade rápida: Tailwind/Alpine carregados
        init() {
            this.ping = 'OK';
        }
    }"
>
    {{-- =========================================================
         CABEÇALHO / SANIDADE
    ========================================================= --}}
    <div class="space-y-2">
        <h1 class="text-xl font-semibold">Painel de Testes — UI Kit (Governança)</h1>
        <p class="text-sm opacity-80">
            App atual: <span class="font-medium">{{ $app->label }}</span> •
            Alpine: <span class="font-medium" x-text="ping ?? '...'"></span> •
            Vite/Tailwind: <span class="font-medium">se você vê estilos e grid, está OK</span>
        </p>
    </div>

    {{-- =========================================================
         TESTES RÁPIDOS (TOAST / LOADER / MODALS)
    ========================================================= --}}
    <section class="rounded-xl border border-ui-nav-border bg-ui-app-bg p-5 shadow-ui-card space-y-4">
        <h2 class="text-lg font-semibold">1) Feedback & Ações Globais</h2>

        <div class="flex flex-wrap gap-2">
            <x-ui.button.primary x-on:click="toast('info')">Toast Info</x-ui.button.primary>
            <x-ui.button.secondary x-on:click="toast('success')">Toast Success</x-ui.button.secondary>
            <x-ui.button.ghost x-on:click="toast('warning')">Toast Warning</x-ui.button.ghost>
            <x-ui.button.danger x-on:click="toast('error')">Toast Error</x-ui.button.danger>
        </div>

        <div class="flex flex-wrap gap-2">
            <x-ui.button.secondary x-on:click="loader(1200)">Loader (1.2s)</x-ui.button.secondary>
            <x-ui.button.secondary x-on:click="loader(2500)">Loader (2.5s)</x-ui.button.secondary>

            <x-ui.button.primary x-on:click="openModal('test-base-modal')">Abrir Modal Base</x-ui.button.primary>
            <x-ui.button.danger x-on:click="openModal('test-confirm')">Abrir Confirm</x-ui.button.danger>

            <x-ui.button.ghost x-on:click="window.dispatchEvent(new CustomEvent('ui-mobile-open'))"
>Abrir Mobile Menu</x-ui.button.ghost>
        </div>

        <p class="text-sm opacity-80">
            Critérios: toast 1x por clique (sem duplicar), loader aparece antes do submit/ação, modais abrem/fecham por overlay/ESC/click outside.
        </p>
    </section>

    {{-- =========================================================
         MODAL BASE
    ========================================================= --}}
    <x-ui.modal.base id="test-base-modal" title="Modal Base — Teste">
        <div class="space-y-3">
            <p class="text-sm text-ui-modal-text">
                Este modal testa: overlay, ESC, click outside, focus-trap (plugin focus) e z-index.
            </p>

            <div class="flex justify-end gap-2 pt-2">
                <x-ui.button.secondary x-on:click="closeModal('test-base-modal')">Fechar</x-ui.button.secondary>
                <x-ui.button.primary
                    x-on:click="
                        toast('success');
                        closeModal('test-base-modal');
                    "
                >
                    Fechar + Toast
                </x-ui.button.primary>
            </div>
        </div>
    </x-ui.modal.base>

    {{-- =========================================================
         MODAL CONFIRM
    ========================================================= --}}
    <x-ui.modal.confirm
        id="test-confirm"
        title="Confirmação — Teste"
        message="Este é um teste do módulo de confirmação (ações destrutivas)."
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

    {{-- =========================================================
         TESTE DE BOTÕES (STATES)
    ========================================================= --}}
    <section class="rounded-xl border border-ui-nav-border bg-ui-app-bg p-5 shadow-ui-card space-y-4">
        <h2 class="text-lg font-semibold">2) Buttons System — States</h2>

        <div class="flex flex-wrap gap-2 items-center">
            <x-ui.button.primary>Primary</x-ui.button.primary>
            <x-ui.button.secondary>Secondary</x-ui.button.secondary>
            <x-ui.button.danger>Danger</x-ui.button.danger>
            <x-ui.button.ghost>Ghost</x-ui.button.ghost>

            <x-ui.button.primary disabled>Primary Disabled</x-ui.button.primary>
            <x-ui.button.danger disabled>Danger Disabled</x-ui.button.danger>
        </div>

        <p class="text-sm opacity-80">
            Critérios: hover/focus/disabled consistentes, sem cores hardcoded no HTML.
        </p>
    </section>

    {{-- =========================================================
         TESTE DE FORMS (INPUT / PASSWORD / SELECT / TEXTAREA)
         (submit com loader + toast, sem depender de backend)
    ========================================================= --}}
    <section class="rounded-xl border border-ui-nav-border bg-ui-app-bg p-5 shadow-ui-card space-y-4">
        <h2 class="text-lg font-semibold">3) Forms System — Campos</h2>

        <form
            class="space-y-4"
            x-on:submit.prevent="
                loader(1200);
                ui.toast.success('Form enviado (simulação) — campos renderizados OK');
            "
        >
            <x-ui.form.input
                name="name"
                label="Nome"
                placeholder="Digite um nome"
                hint="Teste de label, hint e focus"
                required
            />

            <x-ui.form.password
                name="password"
                label="Senha"
                hint="Teste do componente com olho (toggle)"
                required
            />

            <x-ui.form.select
                name="role"
                label="Perfil"
                hint="Teste de select"
            >
                <option value="">Selecione...</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </x-ui.form.select>

            <x-ui.form.textarea
                name="notes"
                label="Observações"
                hint="Teste de textarea"
                rows="3"
            />

            <div class="flex flex-wrap gap-2">
                <x-ui.button.primary type="submit">Enviar (simulado)</x-ui.button.primary>
                <x-ui.button.secondary type="button" x-on:click="ui.toast.info('Clique em enviar para testar loader + toast')">
                    Dica
                </x-ui.button.secondary>
            </div>
        </form>

        <p class="text-sm opacity-80">
            Critérios: componentes exibem label/hint, estados de focus, e o submit dispara loader antes do toast.
        </p>
    </section>

    {{-- =========================================================
         TESTE DE TABLES (STICKY / AÇÕES / EMPTY / PAGINAÇÃO)
    ========================================================= --}}
    <section class="rounded-xl border border-ui-nav-border bg-ui-app-bg p-5 shadow-ui-card space-y-4">
        <h2 class="text-lg font-semibold">4) Tables System — Listagem</h2>

        <x-ui.table>
            <x-slot:head>
                <tr>
                    <th class="px-3 py-2 text-left text-xs font-medium uppercase opacity-70">ID</th>
                    <th class="px-3 py-2 text-left text-xs font-medium uppercase opacity-70">Nome</th>
                    <th class="px-3 py-2 text-left text-xs font-medium uppercase opacity-70">Status</th>
                    <th class="px-3 py-2 text-left text-xs font-medium uppercase opacity-70">Criado</th>
                    <th class="px-3 py-2 text-right text-xs font-medium uppercase opacity-70">Ações</th>
                </tr>
            </x-slot:head>

            @forelse ($paginator as $row)
                <tr>
                    <td class="px-3 py-2">{{ $row->id }}</td>
                    <td class="px-3 py-2">{{ $row->name }}</td>
                    <td class="px-3 py-2">{{ $row->status }}</td>
                    <td class="px-3 py-2">{{ $row->created_at }}</td>
                    <td class="px-3 py-2 text-right">
                        <div class="inline-flex gap-2">
                            <x-ui.button.ghost
                                x-on:click="ui.toast.info('Ver item #{{ $row->id }}')"
                            >
                                Ver
                            </x-ui.button.ghost>

                            <x-ui.button.danger
                                x-on:click="ui.modal.open('confirm-delete-{{ $row->id }}')"
                            >
                                Excluir
                            </x-ui.button.danger>
                        </div>

                        <x-ui.modal.confirm
                            id="confirm-delete-{{ $row->id }}"
                            title="Excluir Item #{{ $row->id }}"
                            message="Confirma a exclusão deste item?"
                        >
                            <x-ui.button.danger
                                x-on:click="
                                    ui.toast.success('Item #{{ $row->id }} excluído');
                                    ui.modal.close('confirm-delete-{{ $row->id }}');
                                "
                            >
                                Confirmar
                            </x-ui.button.danger>
                        </x-ui.modal.confirm>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="px-3 py-8 text-center opacity-70">
                        Não há dados para exibir no momento.
                    </td>
                </tr>
            @endforelse
        </x-ui.table>

        <x-ui.table.pagination :paginator="$paginator" />

        <p class="text-sm opacity-80">
            Critérios: header/scroll responsivo conforme seu componente, ações padronizadas, empty state e paginação integrados.
        </p>
    </section>

    {{-- =========================================================
         TESTE DE TOKENS / ZONAS (visual profile)
    ========================================================= --}}
    <section class="rounded-xl border border-ui-nav-border bg-ui-app-bg p-5 shadow-ui-card space-y-4">
        <h2 class="text-lg font-semibold">5) Tokens & Zonas — Visual Profile</h2>

        <div class="grid gap-3 md:grid-cols-2">
            <div class="rounded-lg border border-ui-nav-border p-4">
                <div class="text-sm font-medium mb-2">Zona: navigation</div>
                <div class="text-xs opacity-70 mb-3">
                    A topbar/sidebar devem refletir o perfil (light/dark/mixed).
                </div>
                <x-ui.button.secondary x-on:click="ui.toast.info('Verifique visual do menu/topbar')">
                    Validar visual
                </x-ui.button.secondary>
            </div>

            <div class="rounded-lg border border-ui-nav-border p-4">
                <div class="text-sm font-medium mb-2">Zona: content</div>
                <div class="text-xs opacity-70 mb-3">
                    Conteúdo deve seguir o perfil (misto: content light/dark).
                </div>
                <x-ui.button.secondary x-on:click="ui.toast.info('Verifique visual do conteúdo')">
                    Validar visual
                </x-ui.button.secondary>
            </div>
        </div>

        <p class="text-sm opacity-80">
            Critérios: trocar perfil no switch do topbar deve mudar zones sem quebrar tokens.
        </p>
    </section>
</div>
@endsection
