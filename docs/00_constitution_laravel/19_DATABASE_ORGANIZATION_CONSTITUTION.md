# 19_DATABASE_ORGANIZATION_CONSTITUTION.md
## Constituição de Organização do Banco de Dados — Laravel 12  
**(Multi-App / Governança Soberana / ERP / Naming Canônico)**

### Propósito
Este documento define as leis imutáveis de **organização, naming e categorização** do banco de dados do sistema, garantindo:

- Clareza estrutural
- Separação por APP (espelhando a arquitetura do código)
- Previsibilidade do schema
- Escalabilidade de longo prazo
- Evolução segura
- Zero ambiguidade futura
- Compatibilidade com RBAC, auditoria, LGPD e multi-tenant

**Banco é contrato arquitetural.  
Nome de tabela é governança.**

---

## 1) Princípio Supremo
A estrutura do banco deve refletir a arquitetura do sistema.

Se o sistema é **Multi-App e separado por domínios**, o banco **também deve expressar isso**.

Nada no banco é arbitrário.  
Nada é nomeado “só para funcionar”.

---

## 2) Regra-Mestre de Organização
Como banco não possui pastas, a organização é expressa por **prefixos canônicos**.

### Regra Geral (Apps Operacionais)
{app}{subdominio}{recurso}


### Regra Especial (Governança)
gov_{recurso}


---

## 3) Prefixos Oficiais de APP (Camada 1)

| APP | Prefixo | Escopo |
|---|---|---|
| Governança | `gov` | Identidade, RBAC, Apps, Logs, Auditoria |
| Site | `web` | Conteúdo e recursos públicos |
| System | `sis` | Núcleo técnico e módulos internos |
| Vendas | `ven` | Domínio operacional de vendas |

**Regra:** nenhuma tabela pode existir sem prefixo de APP.

---

## 4) Regra Especial — Governança (Exceção Constitucional)

### Governança usa:
gov_{recurso}


Exemplos canônicos:
gov_users
gov_roles
gov_permissions
gov_apps
gov_app_user
gov_activity_logs
gov_granularities


### Justificativa arquitetural
- Governança é **camada soberana**
- Não é domínio funcional, é **infraestrutura institucional**
- Subdomínio adicionaria ruído, não clareza
- Governança deve ser **plana, direta e autoritária**

**Somente Governança pode omitir subdomínio.**

---

## 5) Regra Geral — Apps Operacionais (Obrigatória)

Todos os outros apps devem usar:
{app}{subdominio}{recurso}


Exemplos:

### System
sis_fin_titles
sis_fin_charges
sis_cfg_settings


### Vendas
ven_sales_orders
ven_sales_order_items
ven_crm_clients


### Site
web_cms_pages
web_forms_contacts


**Proibição:** apps operacionais não podem usar o formato curto.

---

## 6) Subdomínio (Camada 2)

Subdomínio representa o **módulo funcional** dentro do app.

Exemplos recomendados:
core → núcleo
access → acesso e vínculos
rbac → permissões (somente gov)
audit → auditoria (somente gov)
cfg → configurações
fin → financeiro
crm → clientes
inv → estoque
sup → fornecedores
sales → vendas
cms → conteúdo


**Regra:** subdomínio vazio ou genérico é proibido (exceto Governança).

---

## 7) Recurso (Camada 3) — Nome Real da Tabela

### Leis
- plural obrigatório
- snake_case
- sem abreviações obscuras
- sem nomes genéricos (`data`, `info`, `tmp`)

Exemplos válidos:
users
roles
permissions
clients
orders
payments
activity_logs


---

## 8) Pivot Tables — Lei Canônica

### Governança
gov_{model1}_{model2}

Exemplo:
gov_role_permission
gov_role_user
gov_app_user


### Apps Operacionais
{app}{subdominio}{model1}_{model2}

Exemplo:
ven_sales_order_product
sis_fin_invoice_payment


---

## 9) RBAC no Banco — Lei Estrutural

RBAC pertence exclusivamente à Governança.

### Tabelas canônicas
gov_users
gov_roles
gov_permissions
gov_granularities
gov_role_permission
gov_app_user


### Leis obrigatórias
- Role pertence a UM app
- Permission pertence a UM app
- Granularity pertence a UM app
- Avaliação sempre no contexto do app atual
- **Deny > Allow** (granularity pode negar mesmo se permission permitir)

**Proibição:** RBAC fora de `gov_*`.

---

## 10) Logs & Auditoria — Lei Soberana

Logs pertencem exclusivamente à Governança.

### Tabela canônica
gov_activity_logs


### Leis
- Logs são imutáveis
- Não apagar sem política formal
- Logs contêm ator, app, ação, recurso, diffs, IP, user-agent, URL, method
- Logs são dados sensíveis, acesso restrito por RBAC

**Proibição:** logs fora de `gov_*`.

---

## 11) Naming Canônico — Índices, Unique, Foreign Keys

### Índices
idx_{tabela}_{campos}


### Unique
uk_{tabela}_{campos}


### Foreign Keys
fk_{tabela}_{referencia}


Exemplos:
uk_gov_roles_app_id_code
fk_gov_permissions_app_id
idx_gov_activity_logs_created_at


---

## 12) Migrações — Leis Estruturais

- Migrations devem ser **evolutivas e compatíveis**
- Proibido resetar banco por conveniência
- Remoções exigem política formal
- Índices obrigatórios em colunas críticas
- Sem alterações destrutivas sem plano de rollback

---

## 13) Seeds — Idempotência Obrigatória

- Seeders devem rodar N vezes sem corromper dados
- Devem usar `updateOrCreate`, upserts ou unique keys

**Idempotência é lei.**

---

## 14) LGPD & Proteção de Dados

Dados sensíveis exigem:
- acesso restrito por RBAC
- mascaramento em UI
- criptografia em repouso quando necessário
- preparo para exportação, anonimização e retenção

**Schema nasce LGPD-ready.**

---

## 15) Proibições Absolutas

❌ tabela sem prefixo de APP  
❌ apps operacionais usando formato curto  
❌ RBAC fora de `gov_*`  
❌ logs fora de `gov_*`  
❌ nomes genéricos ou obscuros  
❌ mistura de padrões  
❌ duplicação conceitual sem justificativa  

---

## 16) Princípio Anti-Frankenstein
O banco não pode virar híbrido de padrões diferentes.

Se houver conflito:
**Constituição vence.**

---

## 17) Autoridade Constitucional

Este documento governa:
- Naming de tabelas
- Prefixos por APP
- Estrutura do schema
- Organização por domínio
- Padrão de pivots
- Índices, FKs e uniques
- Evolução futura do banco

Se o schema violar este documento:
**o schema está errado — não a Constituição.**
