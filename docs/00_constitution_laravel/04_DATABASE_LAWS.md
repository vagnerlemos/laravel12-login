Constituição do Banco de Dados — Laravel 12 / Governança / Multi-App
Propósito

Este documento estabelece as leis imutáveis do banco de dados, formalizando o modelo atual validado em produção, garantindo:

Integridade estrutural

Escalabilidade

Governança robusta

RBAC avançado

Multi-App sustentável

Evolução sem quebra

O banco é a espinha dorsal do sistema.
Código muda. Banco permanece.

1. Princípio Supremo do Banco

O modelo atual é BASE CANÔNICA.
Ele deve ser EVOLUÍDO — nunca descartado ou refeito sem justificativa formal.

2. Entidades Fundamentais
2.1 Users — Identidade Global

Tabela base: users 

Y-HEX-DATABASE_SCHEMA


Representa identidade única global.

Leis:

Usuário é global, não pertence a um único app

Autenticação centralizada

Identidade separada de autorização

2.2 Apps — Núcleo Multi-App

Tabela: apps 

Y-HEX-DATABASE_SCHEMA

Campos essenciais:

code único (system, vendas, etc.)

name humano

Leis:

Todo app é simétrico

Nenhum app é superior a outro

Apps são governados somente pela Governança

2.3 App_User — Barreira Primária de Acesso

Tabela pivot: app_user 

Y-HEX-DATABASE_SCHEMA

Lei crítica:

Se o usuário NÃO estiver vinculado ao app, ele NÃO pode acessá-lo.

Essa é a primeira camada de segurança real do sistema.

3. RBAC — Papéis por App
3.1 Roles

Tabela: roles 

Y-HEX-DATABASE_SCHEMA

Regras:

Role pertence a um único app

(app_id + code) é único

Papel é domínio-específico

Lei:

Papéis nunca atravessam apps.

4. Permissions — Permissões por App + Resource

Tabela: permissions 

Y-HEX-DATABASE_SCHEMA

Campos estruturais:

app_id

resource (ex.: users, roles, clients)

code (users.view, users.create)

resource_group_code

resource_group_label

Leis:

Permissão pertence a um app

UI e RBAC usam resource como eixo

code é chave técnica canônica

resource_group_* organiza governança visual

5. Granularity — Controle Fino (Diferencial Estratégico)

Tabela conceitual já usada via Seeder 

Y-HEX-DATABASE_SCHEMA

Lei:

Granularidade permite controle abaixo do nível de permissões.
Deve ser mantida e expandida, nunca removida.

Exemplo:

users.field.cpf.hide


Isso habilita RBAC de nível enterprise real.

6. Clients — Domínio Operacional

Tabela: clients 

Y-HEX-DATABASE_SCHEMA

Lei:

Pertence ao domínio operacional

Não pertence à Governança

Deve evoluir isoladamente

7. Logs — Auditoria Oficial

Tabela: activity_logs 

Y-HEX-DATABASE_SCHEMA

Campos essenciais:

user_id

app

action

resource

resource_id

data (json)

IP, User-Agent, URL, Method

Lei de Logging

Somente eventos CRÍTICOS devem ser registrados.

Registrar:

Login / Logout

CREATE

UPDATE

DELETE

Mudança de permissões

Mudança de papéis

Ações administrativas

NÃO registrar:

Visualização de páginas

Navegação comum

Leitura sem mutação

8. Seeds — Idempotência Obrigatória

Seeders atuais são idempotentes 

Y-HEX-DATABASE_SCHEMA

.

Lei:

Seeders podem rodar N vezes sem corromper dados.

Isso é obrigatório.

9. Princípio Multi-Tenant Futuro (Preparado)

O modelo permite expansão para:

Multi-empresa

Multi-tenant

Sharding futuro

Lei:

Estrutura deve permanecer compatível com multi-tenant futuro.

10. Naming Canônico
Banco:

apps (nome físico)

Código:

Escolher UM padrão definitivo:

App\Models\App
ou

App\Models\Application

Lei:

Nunca misturar os dois nomes.

11. Evolução Permitida
Pode:

Adicionar colunas

Adicionar tabelas

Criar índices

Expandir RBAC

Expandir logs

NÃO pode:

Remover colunas críticas

Renomear sem migração compatível

Quebrar compatibilidade histórica

Recriar RBAC do zero

12. Princípio Anti-Perda de Inteligência

Nada que já funciona e foi validado será descartado sem ganho real comprovado.

13. Autoridade Constitucional

Este documento governa:

Estrutura do banco

Migrations

Seeds

Modelagem futura

Evolução do sistema

Se o código violar o banco canônico, o código está errado — não o banco.
