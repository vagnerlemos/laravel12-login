<nav class="h-full bg-ui-nav-bg border-r border-ui-nav-border p-4">

    <nav class="space-y-6">

    </nav>


    <div class="space-y-6">

        {{-- Marca / App --}}
        <div class="text-lg font-semibold text-ui-nav-title">
            {{ config('app.name', 'ERP') }}
        </div>

        {{-- Navegação --}}
        <ul class="space-y-1">
            <li>
                <a
                    href="{{ route('governanca.dashboard') }}"
                    class="block rounded-lg px-3 py-2 text-sm
                        {{ request()->routeIs('governanca.dashboard')
                            ? 'bg-ui-nav-active text-ui-nav-active-text'
                            : 'text-ui-nav-text hover:bg-ui-nav-hover' }}"
                >
                    Dashboard
                </a>
            </li>

            <li>
                <a
                    href="#"
                    class="block rounded-lg px-3 py-2 text-sm
                        text-ui-nav-text hover:bg-ui-nav-hover"
                >
                    Usuários
                </a>
            </li>

            <li>
                <a
                    href="#"
                    class="block rounded-lg px-3 py-2 text-sm
                        text-ui-nav-text hover:bg-ui-nav-hover"
                >
                    Configurações
                </a>
            </li>
        </ul>

    </div>
</nav>
