Constituição de Logs & Auditoria — Laravel 12 (Governança / ERP / RBAC)
Propósito

Este documento define as leis imutáveis de auditoria e logging do sistema, garantindo:

Rastreabilidade total de ações críticas

Segurança operacional

Compliance e governança

Investigação forense futura

Performance controlada

Logs úteis — não ruído

Log existe para proteger o sistema — não para inflar banco.

1. Princípio Supremo do Logging

Somente ações RELEVANTES e CRÍTICAS devem ser registradas.
Visualização e navegação NÃO são eventos auditáveis.

2. Objetivo do Sistema de Logs

O log deve permitir responder:

Quem fez a ação?

Em qual app?

Em qual recurso?

O que foi alterado?

Quando?

De onde (IP / User-Agent)?

Qual era o valor antes?

Qual é o valor depois?

3. Logs pertencem à Governança

O sistema de auditoria é soberano e pertence ao APP Governança.

Mesmo que o evento ocorra em outro app (vendas, system, etc.),
o registro pertence à Governança.

4. Local Arquitetural na Nova Árvore
Service responsável por logs
app/Services/Governanca/ActivityLogger.php

Model de log
app/Models/Governanca/ActivityLog.php

Migration
database/migrations/governanca/create_activity_logs_table.php

5. Estrutura Mínima Obrigatória do Log

Cada registro deve conter:

Campo	Descrição
actor_id	Usuário que executou a ação
app	App onde ocorreu
action	Código da ação (gov.user.created)
resource	Tipo do recurso (users, roles)
resource_id	ID do registro afetado
old_values	JSON com valores anteriores
new_values	JSON com valores novos
context	JSON adicional
ip_address	IP do ator
user_agent	Navegador / agente
url	Endpoint acionado
method	HTTP Method
created_at	Data/hora

Logs sem contexto suficiente são inválidos.

6. Taxonomia Oficial de Ações (Padrão)
Formato do action code
{dominio}.{recurso}.{ação}

Exemplos
gov.user.created
gov.user.updated
gov.user.deleted

gov.role.created
gov.role.updated

gov.permission.created
gov.permission.updated

gov.app.access.granted
gov.app.access.revoked

sales.order.created
sales.order.updated

system.config.updated


Action code é canônico e não pode ser arbitrário.

7. O QUE DEVE SER LOGADO (Obrigatório)
7.1 Autenticação

Login

Logout

Tentativas falhas críticas (opcional)

7.2 Governança / RBAC

Criação / alteração / remoção de usuários

Alteração de roles

Alteração de permissions

Alteração de granularities

Vínculo usuário ↔ app

Mudança de privilégios

Configuração crítica de governança

7.3 CRUDs Críticos de Negócio

Somente quando houver:

CREATE

UPDATE

DELETE

RESTORE

Se apenas visualizou → NÃO loga.

7.4 Configurações sensíveis

Configuração de sistema

Configuração global

Configuração financeira

Configuração de integrações

8. O QUE NÃO DEVE SER LOGADO (Proibição)

❌ Page views
❌ Acesso a tela
❌ Listagens
❌ Leituras sem mutação
❌ Refresh de página
❌ Requisições automáticas irrelevantes
❌ Telemetria de baixo valor

Logs NÃO são analytics.

9. Granularidade do Log (Obrigatória)
Para UPDATE:

Registrar:

Campo alterado

Valor antigo

Valor novo

Exemplo:
old_values: { "email": "old@email.com" }
new_values: { "email": "new@email.com" }

10. Onde o Log é Disparado (Arquitetura)
Logs devem ser disparados SOMENTE em:
Camada	Pode logar?
Middleware	❌ NÃO
Policy	❌ NÃO
Controller	❌ NÃO
Service	✅ SIM
Model	❌ NÃO

Somente Services registram logs.

11. Relação Log ↔ RBAC

Toda ação protegida por RBAC que for executada com sucesso:

DEVE gerar log se for sensível

Não logar ações negadas (exceto segurança crítica)

12. Performance e Controle de Volume
Princípio

Logs devem ser úteis — não volumosos.

Regras:

Nada de log automático em massa

Nada de log em loops grandes

Nada de log em leitura em lote

13. Retenção e Arquivamento (Planejado)

Logs devem suportar:

Retenção configurável (ex.: 6 meses, 1 ano, 5 anos)

Arquivamento frio futuro

Exportação para auditoria externa

14. Segurança do Log

Logs são IMUTÁVEIS.

Proibido:

❌ Editar logs
❌ Apagar logs sem política formal
❌ Alterar histórico

Logs servem como prova histórica.

15. Acesso aos Logs

Somente usuários com permissão explícita:

logs.view
logs.search
logs.export


Logs são dados sensíveis.

16. Integração com UI

A UI deve permitir:

Filtrar por ator

Filtrar por recurso

Filtrar por ação

Filtrar por data

Visualizar diffs (antes/depois)

17. Princípio Anti-Ruído

Se um log não ajuda auditoria, segurança ou rastreabilidade — ele NÃO deve existir.

18. Autoridade Constitucional

Este documento governa:

Sistema de logs

ActivityLogger

Estrutura da tabela de auditoria

Políticas de retenção

Estratégia de rastreabilidade

Se o código violar esta política, o código está errado — não os logs.
