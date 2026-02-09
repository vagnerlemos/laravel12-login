Constituição do RBAC — Laravel 12 (Governança Soberana / Apps Simétricos)
Propósito

Este documento define as leis imutáveis do RBAC (controle de acesso) do sistema, garantindo:

Segurança estrutural

Previsibilidade

Escalabilidade

Governança soberana

Separação correta de responsabilidades (Middleware / Policy / Service)

Auditoria confiável

Este RBAC é baseado no modelo atual validado em banco e legado, porém reconstruído sob a Constituição do Laravel 12.

1. Princípio Supremo do RBAC

Nenhuma ação sensível acontece sem passar por RBAC.
Nenhuma autorização pode ser implícita.
O RBAC tem uma única fonte de verdade.

2. Soberania: Governança governa, Apps não governam
2.1 Governança é o único poder supramundial

Governança controla:

Usuários globais

Apps

Vínculo usuário ↔ app

Roles

Permissions

Granularity

Logs críticos

2.2 Apps são simétricos e soberanos apenas sobre o próprio domínio

system, vendas, fornecedor, etc. são equivalentes

Apps não podem configurar outros apps

Apps não implementam RBAC próprio

RBAC é centralizado na Governança, consumido por todos.

3. Ordem Oficial de Decisão de Acesso (Obrigatória)

Middleware: o usuário pode acessar o APP? (barreira app_user)

Policy: o usuário pode executar a ação naquele recurso?

Service: executa a regra de negócio autorizada

Logger: registra auditoria (quando aplicável)

Se falhar em qualquer etapa → ação negada.

4. Camadas e Responsabilidades (Lei Constitucional)
4.1 Middleware (MACRO)

Responsável somente por:

Garantir autenticação

Resolver o contexto do app

Validar vínculo app_user (acesso ao app)

Proibido:

Checar permission/role/granularity

Autorizar ações finas

4.2 Policies (FINO — núcleo do RBAC)

Responsável por:

Autorizar ações por entidade e por ação (CRUD e operações especiais)

Aplicar regras de segurança e anti-escalonamento

Considerar contexto do app

Considerar roles / permissions / granularities

Lei:

Toda autorização fina deve estar em Policy.

4.3 Services (EXECUÇÃO)

Responsável por:

Executar operações de negócio (create, update, delete, sync)

Aplicar transações

Disparar logs de auditoria

Lei:

Service nunca autoriza. Service executa após autorização.

4.4 Models (ESTADO)

Relações, casts, scopes

Sem RBAC dentro de models

5. Entidades RBAC (Base do Modelo)
5.1 Apps

App é a fronteira primária de contexto

Cada requisição operará com um app ativo

5.2 Vínculo Usuário ↔ App (app_user)

Sem vínculo não existe acesso ao app.

Esta é a barreira primária e obrigatória.

5.3 Roles (por App)

Role pertence a um único app

app_id + code é único

Role nunca atravessa apps.

5.4 Permissions (por App + Resource)

Permission pertence a um único app

organizada por:

resource

code (chave técnica canônica)

resource_group_code/label (organização)

Permission nunca atravessa apps.

5.5 Granularity (controle fino)

Granularity permite:

Restrições por campo

Restrições por ação

Controle fino por contexto

6. Regra Fundamental: Deny sempre vence Allow

Granularity (deny) tem prioridade sobre permission (allow).
Deny > Allow

Isso é obrigatório para RBAC enterprise e evita brechas.

7. Regras Canônicas de Permissões
7.1 O que é “permission code”

É a chave técnica imutável, ex.:

users.view

users.create

roles.update

permissions.delete

Lei:

Permission code é canônico e não pode mudar sem migração e compatibilidade.

7.2 Escopo por App

Todas as permissões avaliadas devem ser do app atual

Permissões de outro app não têm efeito

8. Regras Anti-Escalonamento (Obrigatórias)
8.1 Auto-governança proibida

Um usuário não pode:

elevar o próprio papel

conceder a si mesmo permissões críticas

criar vínculo com app sem permissão apropriada

editar o próprio “nível” de governança

8.2 Imutabilidade de app_id em RBAC

Nenhum ator pode alterar:

role.app_id

permission.app_id

granularity.app_id

A alteração de app_id em RBAC é proibida ou restrita a rotina constitucional específica (se existir).

9. Regras de Policy (Padrão Oficial)
9.1 Policies são determinísticas

Sem efeitos colaterais

Sem escrita em banco

Sem side effects

9.2 Policies devem ser legíveis

Regras claras, curtas e auditáveis

Sem lógica obscura

9.3 Nomes e métodos padrão

Pelo menos:

viewAny

view

create

update

delete

restore (se existir)

forceDelete (se existir)

10. Regras de Middleware (Padrão Oficial)
10.1 Middleware de app acessível

Deve existir um middleware (ou conjunto) que:

resolve app ativo

valida vínculo em app_user

bloqueia acesso antes de chegar ao controller

10.2 Proibição

Middleware não pode decidir:

users.create

roles.update

etc.

Isso é trabalho de Policy.

11. Auditoria (Logs) vinculada ao RBAC
11.1 Logar somente eventos críticos

Devem gerar log:

Login / Logout

CREATE / UPDATE / DELETE em entidades críticas

Mudança de Role/Permission/Granularity

Mudança de vínculo usuário ↔ app

Mudanças administrativas estruturais

Não logar:

page view

leitura sem mutação

navegação comum

11.2 Estrutura de log

O log deve conter no mínimo:

actor (quem fez)

app (contexto)

action

resource

resource_id

dados relevantes (idealmente diffs: antes/depois quando aplicável)

ip / user-agent / url

12. Fonte de Verdade

RBAC deve ter uma fonte única.
Não pode existir “um RBAC diferente” por app.

Apps apenas consomem o sistema de autorização central.

13. Evolução Permitida

Pode:

adicionar permissões

adicionar roles

expandir granularidade

adicionar regras novas em policies

adicionar logs de eventos críticos

Não pode:

remover camadas do RBAC

enfraquecer deny-overrides

criar bypass fora de policy

duplicar RBAC por app

14. Autoridade Constitucional

Este documento governa:

Policies

Middlewares de acesso

Services de governança

Modelagem de RBAC

Auditoria de ações críticas

Se o código violar este documento, o código está errado — não o RBAC.
