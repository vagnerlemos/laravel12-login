Base Universal — Laravel 12 — Contexto Técnico Atual (para IA)
OBJETIVO DESTE ARQUIVO

Este documento resume o estado real do código do projeto até este ponto.
Ele deve ser lido pela IA como contexto fixo, equivalente a “memória de trabalho” do sistema.

🧱 ARQUITETURA GERAL

Framework: Laravel 12

PHP: 8.2

Arquitetura multi-app soberana

Apps atuais:

site (público)

system

vendas

governanca (soberano)

Cada app possui:

Rotas próprias

Contexto próprio

Controle de acesso centralizado na Governança

🧠 GOVERNANÇA (NÚCLEO SOBERANO)
Banco de Dados (Governança)

Todas as entidades críticas estão namespaced em Governança:

Tabelas:

gov_users

gov_apps

gov_app_user

gov_roles

gov_permissions

gov_permission_role

gov_granularities

gov_activity_logs

Migrations:

Localizadas em database/migrations/governanca

Carregadas via GovernanceServiceProvider

Nenhuma migration legacy padrão do Laravel é usada para usuários

👤 MODELS (Estado Puro)

Namespace: App\Models\Governanca

Models existentes:

User (extends Authenticatable)

App

Role

Permission

Granularity

ActivityLog

Características:

Apenas $table, relações e casts

Sem lógica de negócio

Sem RBAC dentro de models

🔐 AUTENTICAÇÃO (AUTH)

Auth centralizado

Provider users aponta para:

App\Models\Governanca\User

Guard: session

Sessão única e global

Um usuário autenticado pode acessar múltiplos apps, conforme vínculo em gov_app_user

🔎 CONTEXTO DE ACESSO (MIDDLEWARE)

Middleware ativo:

App\Http\Middleware\Governanca\EnsureGovernancaContext

Responsabilidades:

Não autentica

Se usuário não estiver logado, permite continuar (login é no Controller)

Resolve app governanca

Regras:

App não existe → 404

App existe e está inativo → 503

Usuário sem vínculo → 403

Injeta o app no request ($request->attributes->set('app', ...))

Middleware não autoriza ações finas.

🧭 ROTAS

Carregadas manualmente via RouteServiceProvider:

routes/site.php

routes/system.php

routes/vendas.php

routes/governanca.php

routes/api.php (/api/v1)

Todos os apps estão operacionais e testados.

🧾 LOGS & AUDITORIA

Model: ActivityLog

Logs pertencem à Governança

Estrutura preparada para:

actor

app

action

resource

old_values

new_values

Logs ainda não disparados por Services (fase futura)

🎨 FRONTEND

CSS e JS globais:

resources/css/app.css

resources/js/app.js

UI ainda mínima

Login será customizado por app

Comportamento de erro (auth) será global

📍 ESTADO ATUAL DO PROJETO

✔ Bootstrap completo
✔ Banco governança modelado
✔ Auth soberano configurado
✔ Middleware de contexto ativo
✔ Rotas multi-app funcionando

▶ PRÓXIMA FASE PLANEJADA
FASE — LOGIN MULTI-APP

Constituição específica (Login Multi-App)

Controllers de login por app

Blades customizados por app

CSS/JS híbrido (global + específico)

Garantir:

Sessão única

Verificação de app antes do login

Redirecionamento automático se já autenticado


