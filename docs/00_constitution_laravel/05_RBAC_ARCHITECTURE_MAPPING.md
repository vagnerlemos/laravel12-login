Mapeamento Arquitetural do RBAC — Laravel 12 (Base Constitucional)
Propósito

Este documento define COMO o RBAC deve existir dentro da nova arquitetura Laravel 12, respeitando:

Constituição de Arquitetura

Leis de Organização de Pastas

Leis do Banco

Separação Middleware / Policies / Services

Governança soberana

Apps simétricos

RBAC legado fornece inteligência.
A nova arquitetura fornece a forma.

1. Princípio Supremo

RBAC NÃO pode viver espalhado.
Cada decisão de autorização pertence a UMA camada clara.

Nenhuma regra de acesso pode ser:

Duplicada

Implícita

Espalhada

Misturada

2. Onde o RBAC VIVE na Nova Árvore

RBAC pertence primariamente ao App Governança, mas é consumido por todos os Apps.

Localização estrutural
app/
  Policies/Governanca/
  Services/Governanca/
  Models/Governanca/
  Http/Middleware/Governanca/

3. Divisão Constitucional de Responsabilidades
3.1 Middleware — Acesso ao APP (Camada MACRO)

Responsável SOMENTE por:

Verificar se usuário está vinculado ao app (app_user)

Garantir contexto do app

Bloquear acesso antes de chegar ao Controller

Exemplos:

EnsureAppContext.php
EnsureUserHasAppAccess.php


❌ Middleware NÃO decide permissões
❌ Middleware NÃO avalia RBAC fino

3.2 Policies — Decisão FINA de Permissão (Coração do RBAC)

Policies são a única camada autorizada a decidir:

“Usuário pode executar esta ação sobre este recurso?”

Responsável por:

Verificar roles

Verificar permissions

Aplicar granularities

Avaliar contexto do app

Local:

app/Policies/Governanca/
  UserPolicy.php
  RolePolicy.php
  PermissionPolicy.php


❌ Controllers NÃO fazem RBAC
❌ Services NÃO fazem autorização

3.3 Services — Execução de Regra de Negócio

Services executam a ação APÓS autorização concedida.

Responsável por:

Criar usuários

Atribuir roles

Sincronizar permissões

Registrar logs

Local:

app/Services/Governanca/
  UserService.php
  RoleService.php
  PermissionService.php


❌ Services NÃO decidem acesso
❌ Services apenas EXECUTAM

3.4 Models — Estado, não Poder

Models contêm:

Relações

Scopes

Métodos simples

❌ Model NÃO contém RBAC
❌ Model NÃO bloqueia acesso

3.5 Helpers — Utilitários Puros

Helpers apenas:

Formatam

Normalizam

Calculam

❌ Helpers NÃO fazem RBAC
❌ Helpers NÃO consultam permissões

3.6 Providers — Registro Estrutural

Providers apenas:

Registram policies

Registram gates (se houver)

Registram bindings

❌ Providers NÃO decidem acesso

4. Ordem Oficial de Decisão de Acesso
1. Middleware → usuário pode acessar o APP?
2. Policy → usuário pode executar A AÇÃO?
3. Service → executa a ação autorizada
4. Logger → registra auditoria


Se falhar em qualquer etapa, a ação NÃO ocorre.

5. Fluxo Real de Autorização (Exemplo)
Criar Usuário
Request
 → Middleware valida app
 → Controller chama Policy (create user)
 → Policy valida roles + permissions + granularity
 → Service cria usuário
 → Logger grava evento

6. RBAC por App — Lei Estrutural

Roles pertencem a UM app

Permissions pertencem a UM app

Granularity pertence a UM app

Policies avaliam SOMENTE contexto do app

RBAC nunca atravessa fronteira entre apps.

7. Granularity — Camada Obrigatória

Granularity atua como:

Restrições finas

Negação explícita

Controle campo-a-campo

Controle ação-a-ação

Lei:

Granularity SEMPRE pode negar, mesmo se Permission permitir.

Deny > Allow

8. Anti-Auto-Governança (Blindagem Obrigatória)
Usuário NÃO pode:

Elevar o próprio papel

Conceder a si mesmo permissões críticas

Alterar o app de uma role

Alterar o app de uma permission

Policies devem conter essas travas.

9. RBAC e Auditoria — Integração Oficial

Toda ação RBAC crítica deve gerar log auditável:

Registrar:

Criação de usuários

Mudança de roles

Mudança de permissions

Mudança de granularities

Alterações de acesso a apps

Local do Logger:

app/Services/Governanca/ActivityLogger.php

10. Padrão Canônico de Policies
Estrutura esperada
public function update(User $actor, Role $role)
{
    return $actor->hasPermission('roles.update')
        && !$actor->isEditingSelf()
        && !$role->isSystemLocked();
}


Policies devem ser:

Determinísticas

Legíveis

Sem efeitos colaterais

11. Padrão Canônico de Middleware RBAC

Middleware:

NÃO decide permissões

NÃO consulta granularidade

Apenas valida acesso ao APP

12. Separação Global vs Governança

RBAC estrutural pertence à Governança.

Apps apenas:

Consultam autorização

Nunca implementam RBAC próprio

RBAC é um poder centralizado.

13. Princípio Anti-Duplicação

RBAC NÃO pode ser reimplementado em outro lugar.
Existe UMA fonte de verdade.

14. Princípio de Evolução Segura

RBAC pode:

Crescer

Refinar granularidade

Adicionar novos papéis

RBAC NÃO pode:

Perder camadas

Simplificar poder

Remover restrições críticas

15. Resultado Esperado

RBAC previsível

Segurança consistente

Zero bypass

Clareza arquitetural

Sustentabilidade por anos
