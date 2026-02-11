@extends('layouts.app')

@section('content')
@php
    use Illuminate\Pagination\LengthAwarePaginator;

    // =========================================================
    // DATASET FAKE — TABLE + PAGINAÇÃO (UI Kit Lab)
    // =========================================================
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

        // Toast (ui.toast.*)
        toast(type) {
            if (!globalThis.ui?.toast) return;
            const msg = `Toast (${type}) @ ${new Date().toLocaleTimeString()}`;
            if (type === 'success') ui.toast.success(msg);
            if (type === 'error') ui.toast.error(msg);
            if (type === 'warning') ui.toast.warning(msg);
            if (type === 'info') ui.toast.info(msg);
        },

        // Loader (ui.loader.*)
        loader(ms = 1200) {
            if (!globalThis.ui?.loader) return;
            ui.loader.show();
            setTimeout(() => ui.loader.hide(), ms);
        },

        // Modal (ui.modal.*)
        openModal(id) {
            if (!globalThis.ui?.modal) return;
            ui.modal.open(id);
        },

        closeModal(id) {
            if (!globalThis.ui?.modal) return;
            ui.modal.close(id);
        },

        // Mobile Menu (evento já institucional)
        openMobileMenu() {
            globalThis.dispatchEvent(new CustomEvent('ui-mobile-open'));
        },

        init() {
            this.ping = 'OK';
        },
    }"
>
    {{-- =========================================================
         HEADER / SANIDADE
    ========================================================== --}}
    <div class="space-y-2">
        <h1 class="text-xl font-semibold">UI Kit Lab — Governança</h1>

        <p class="text-sm opacity-80">
            App atual:
            <span class="font-medium">{{ $app->label }}</span>
            • Alpine:
            <span class="font-medium" x-text="ping ?? '...'"></span>
            • Visual Profile: valide via switch do Topbar
        </p>
    </div>

    {{-- =========================================================
         1) AÇÕES GLOBAIS — TOAST / LOADER / MODALS / MOBILE
    ========================================================== --}}
    <section class="rounded-xl border border-ui-nav-border bg-ui-app-bg p-5 shadow-ui-card space-y-4">
        <div class="space-y-1">
            <h2 class="text-lg font-semibold">1) Ações Globais</h2>
            <p class="text-sm opacity-80">
                Critérios: toast sem duplicar, loader aparece e some, modais abrem/fecham por ESC/overlay/click outside, mobile menu abre.
            </p>
        </div>

        <div class="flex flex-wrap gap-2">
            <x-ui.button.primary x-on:click="toast('info')">Toast Info</x-ui.button.primary>
            <x-ui.button.secondary x-on:click="toast('success')">Toast Success</x-ui.button.secondary>
            <x-ui.button.ghost x-on:click="toast('warning')">Toast Warning</x-ui.button.ghost>
            <x-ui.button.danger x-on:click="toast('error')">Toast Error</x-ui.button.danger>
        </div>

        <div class="flex flex-wrap gap-2">
            <x-ui.button.secondary x-on:click="loader(1200)">Loader (1.2s)</x-ui.button.secondary>
            <x-ui.button.secondary x-on:click="loader(2500)">Loader (2.5s)</x-ui.button.secondary>

            <x-ui.button.primary x-on:click="openModal('lab-modal-base')">Abrir Modal Base</x-ui.button.primary>
            <x-ui.button.danger x-on:click="openModal('lab-modal-confirm')">Abrir Confirm</x-ui.button.danger>

            <x-ui.button.ghost x-on:click="openMobileMenu()">Abrir Mobile Menu</x-ui.button.ghost>
        </div>
    </section>

    {{-- =========================================================
         MODAL BASE — TESTE
    ========================================================== --}}
    <x-ui.modal.base id="lab-modal-base" title="Modal Base — UI Kit Lab">
        <div class="space-y-3">
            <p class="text-sm text-ui-modal-text">
                Testa: overlay, ESC, click outside, focus-trap (quando aplicável) e z-index.
            </p>

            <div class="flex justify-end gap-2 pt-2">
                <x-ui.button.secondary x-on:click="closeModal('lab-modal-base')">Fechar</x-ui.button.secondary>

                <x-ui.button.primary
                    x-on:click="
                        toast('success');
                        closeModal('lab-modal-base');
                    "
                >
                    Fechar + Toast
                </x-ui.button.primary>
            </div>
        </div>
    </x-ui.modal.base>

    {{-- =========================================================
         MODAL CONFIRM — TESTE
    ========================================================== --}}
    <x-ui.modal.confirm
        id="lab-modal-confirm"
        title="Confirmação — UI Kit Lab"
        message="Este é um teste do módulo de confirmação (ações destrutivas)."
    >
        <x-ui.button.danger
            x-on:click="
                ui.toast.success('Ação confirmada (teste)');
                ui.modal.close('lab-modal-confirm');
            "
        >
            Confirmar Teste
        </x-ui.button.danger>
    </x-ui.modal.confirm>

    {{-- =========================================================
         2) BUTTONS SYSTEM — VARIANTES / DISABLED / LOADING
         (loading aqui é server-render; ainda não é runtime por Alpine)
    ========================================================== --}}
    <section class="rounded-xl border border-ui-nav-border bg-ui-app-bg p-5 shadow-ui-card space-y-4">
        <div class="space-y-1">
            <h2 class="text-lg font-semibold">2) Buttons System</h2>
            <p class="text-sm opacity-80">
                Critérios: hover/focus coerentes, disabled bloqueia clique, loading mostra spinner e desabilita. Sem cores hardcoded no HTML.
            </p>
        </div>

        <div class="flex flex-wrap gap-2 items-center">
            <x-ui.button.primary>Primary</x-ui.button.primary>
            <x-ui.button.secondary>Secondary</x-ui.button.secondary>
            <x-ui.button.danger>Danger</x-ui.button.danger>
            <x-ui.button.ghost>Ghost</x-ui.button.ghost>

            <span class="mx-2 opacity-40">|</span>

            <x-ui.button.primary disabled>Primary Disabled</x-ui.button.primary>
            <x-ui.button.secondary disabled>Secondary Disabled</x-ui.button.secondary>
            <x-ui.button.danger disabled>Danger Disabled</x-ui.button.danger>

            <span class="mx-2 opacity-40">|</span>

            <x-ui.button.primary loading="true">Primary Loading</x-ui.button.primary>
            <x-ui.button.secondary loading="true">Secondary Loading</x-ui.button.secondary>
            <x-ui.button.danger loading="true">Danger Loading</x-ui.button.danger>
        </div>

        <p class="text-sm opacity-80">
            Observação: se o Secondary estiver “ghost”, valide se <code>--ui-btn-secondary-bg</code> está carregando e se o <code>_buttons.css</code> entrou no build.
        </p>
    </section>

    {{-- =========================================================
         3) FORMS SYSTEM — INPUT / PASSWORD / SELECT / TEXTAREA
         (submit simulado com loader + toast)
    ========================================================== --}}
    <section class="rounded-xl border border-ui-nav-border bg-ui-app-bg p-5 shadow-ui-card space-y-4">
        <div class="space-y-1">
            <h2 class="text-lg font-semibold">3) Forms System</h2>
            <p class="text-sm opacity-80">
                Critérios: label/hint/erro (quando aplicável), foco consistente e submit dispara loader antes do feedback.
            </p>
        </div>

        <form
            class="space-y-4"
            x-on:submit.prevent="
                loader(1200);
                ui.toast.success('Form enviado (simulação) — render OK');
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

                <x-ui.button.secondary
                    type="button"
                    x-on:click="ui.toast.info('Clique em ENVIAR para testar loader + toast')"
                >
                    Dica
                </x-ui.button.secondary>
            </div>
        </form>
    </section>

    {{-- =========================================================
         4) UPLOAD SYSTEM — UI UPLOAD (Fase 3)
         (valida: preview, progress, 422/500, limite, reset real)
    ========================================================== --}}
    <section class="rounded-xl border border-ui-nav-border bg-ui-app-bg p-5 shadow-ui-card space-y-5">
        <div class="space-y-1">
            <h2 class="text-lg font-semibold">4) Upload System</h2>
            <p class="text-sm opacity-80">
                Critérios: selecionar arquivo habilita upload, progress avança, sucesso dá toast e reseta, erro mostra toast + mensagem inline, permite reenviar o MESMO arquivo após reset.
            </p>
        </div>

        <div class="grid gap-5 md:grid-cols-2">
            <div class="rounded-xl border border-ui-nav-border p-4 space-y-3">
                <div class="space-y-1">
                    <div class="text-sm font-medium">Upload — Imagem (até 2MB)</div>
                    <div class="text-xs opacity-80">Valida preview + fluxo de sucesso.</div>
                </div>

                <x-ui.upload
                    name="avatar"
                    label="Imagem"
                    accept="image/*"
                    :maxSize="2"
                />
            </div>

            <div class="rounded-xl border border-ui-nav-border p-4 space-y-3">
                <div class="space-y-1">
                    <div class="text-sm font-medium">Upload — PDF (até 0.2MB)</div>
                    <div class="text-xs opacity-80">Força erro de tamanho com PDFs maiores (teste de limite).</div>
                </div>

                <x-ui.upload
                    name="doc"
                    label="Documento PDF"
                    accept="application/pdf"
                    :maxSize="0.2"
                />
            </div>
        </div>

        <p class="text-sm opacity-80">
            Endpoint esperado: rota nomeada <code>upload.store</code> (POST /governanca/upload).
        </p>
    </section>

    {{-- =========================================================
         5) TABLES SYSTEM — STICKY / AÇÕES / EMPTY / PAGINAÇÃO
    ========================================================== --}}
    <section class="rounded-xl border border-ui-nav-border bg-ui-app-bg p-5 shadow-ui-card space-y-4">
        <div class="space-y-1">
            <h2 class="text-lg font-semibold">5) Tables System</h2>
            <p class="text-sm opacity-80">
                Critérios: header/scroll conforme componente, ações padronizadas, empty state e paginação integrados.
            </p>
        </div>

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
                                x-on:click="ui.modal.open('lab-confirm-delete-{{ $row->id }}')"
                            >
                                Excluir
                            </x-ui.button.danger>
                        </div>

                        <x-ui.modal.confirm
                            id="lab-confirm-delete-{{ $row->id }}"
                            title="Excluir Item #{{ $row->id }}"
                            message="Confirma a exclusão deste item?"
                        >
                            <x-ui.button.danger
                                x-on:click="
                                    ui.toast.success('Item #{{ $row->id }} excluído (teste)');
                                    ui.modal.close('lab-confirm-delete-{{ $row->id }}');
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
    </section>

    {{-- =========================================================
         6) TOKENS & ZONAS — VISUAL PROFILE
    ========================================================== --}}
    <section class="rounded-xl border border-ui-nav-border bg-ui-app-bg p-5 shadow-ui-card space-y-4">
        <div class="space-y-1">
            <h2 class="text-lg font-semibold">6) Tokens & Zonas</h2>
            <p class="text-sm opacity-80">
                Critérios: alternar perfil no switch do topbar muda visual por zona sem quebrar tokens.
            </p>
        </div>

        <div class="grid gap-3 md:grid-cols-2">
            <div class="rounded-lg border border-ui-nav-border p-4 space-y-3">
                <div class="space-y-1">
                    <div class="text-sm font-medium">Zona: navigation</div>
                    <div class="text-xs opacity-80λαν">
                        Sidebar/topbar devem refletir (light/dark/mixed).
                    </div>
                </div>

                <x-ui.button.secondary x-on:click="ui.toast.info('Valide visual do menu/topbar')">
                    Validar Navigation
                </x-ui.button.secondary>
            </div>

            <div class="rounded-lg border border-ui-nav-border p-4 space-y-3">
                <div class="space-y-1">
                    <div class="text-sm font-medium">Zona: content</div>
                    <div class="text-xs opacity-80">
                        Conteúdo deve seguir (misto: content light/dark).
                    </div>
                </div>

                <x-ui.button.secondary x-on:click="ui.toast.info('Valide visual do conteúdo')">
                    Validar Content
                </x-ui.button.secondary>
            </div>
        </div>
    </section>
</div>
<form method="POST" action="{{ route('governanca.test-submit') }}">
    @csrf

    <x-ui.button.primary type="submit">
        Teste Submit Real
    </x-ui.button.primary>
</form>



@endsection
