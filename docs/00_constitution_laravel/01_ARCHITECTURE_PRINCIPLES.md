Constituição de Arquitetura — Laravel 12 / PHP 8.2 / VITE / VSCODE / XAMMP
Propósito

Este documento define as leis arquiteturais imutáveis do sistema.
Nenhuma decisão técnica futura pode violar estes princípios sem revisão constitucional formal.

O objetivo é garantir:

Clareza estrutural

Consistência técnica

Escalabilidade de longo prazo

Manutenibilidade

Governança arquitetural

Previsibilidade do sistema

Sustentabilidade por muitos anos

1. Princípio Supremo

O sistema deve seguir um único padrão arquitetural, sem variações locais ou improvisações.
Se uma regra existe para um módulo, ela existe para todos.

Nada deve ser implementado “só porque é mais rápido”.

2. Stack Oficial

PHP 8.2

Laravel 12

Sem Filament ou frameworks administrativos externos

UI própria

Arquitetura soberana

Foco em ERP, Governança, RBAC e escalabilidade enterprise

3. Princípio da Arquitetura Soberana

O sistema pertence à sua própria arquitetura, não a frameworks auxiliares.

Não adotamos:

Painéis administrativos prontos

Temas externos acoplados

Frameworks que controlem UI ou governança

4. Separação Estrutural de Responsabilidades (Laravel)

Cada camada possui um papel exclusivo e obrigatório.

4.1 Middleware — Controle Macro de Contexto

Middleware é usado somente para:

Autenticação global

Seleção de contexto de aplicativo (/governanca, /system, /vendas, etc.)

Garantia de sessão válida

Bloqueio macro de acesso

Proteção estrutural

Proibido em Middleware:

Regra de negócio

Autorização fina

Manipulação direta de dados

Decisões de domínio

4.2 Policies — Autorização Fina e Oficial

Toda autorização sensível deve passar por Policies.

Responsável por:

Permissões por entidade

CRUD permissionado

RBAC fino

Controle de privilégios

Proibido fora de Policies:

if de permissão em Controllers

if de permissão em Services

Autorização manual espalhada

Nenhuma ação crítica ocorre sem Policy.

4.3 Services — Regra de Negócio Oficial

Toda lógica de negócio vive em Services.

Responsável por:

Fluxos de criação

Alterações críticas

Processos complexos

Transações

Orquestração de regras

Controllers NÃO contêm lógica de negócio.

4.4 Controllers — Orquestração Fina

Controllers:

Recebem Requests

Validam entradas

Chamam Services

Disparam Policies

Retornam Responses

Proibido em Controllers:

Regras de domínio profundas

Persistência direta

Processos críticos

4.5 Models — Estado e Relações

Models contêm apenas:

Relacionamentos

Casts

Scopes

Métodos simples de estado

Proibido em Models:

Fluxos complexos

Processos críticos

Regras profundas de negócio

4.6 Helpers — Utilidades Puras

Helpers devem conter somente funções puras:

Formatação

Conversões

Normalizações

Funções reutilizáveis sem domínio

Helpers NÃO podem conter lógica de negócio.

5. Fluxo Arquitetural Oficial
Request
 → Middleware (Contexto e Segurança)
 → Controller (Orquestração)
 → Policy (Autorização)
 → Service (Regra de Negócio)
 → Model (Persistência / Estado)
 → Response


Qualquer desvio é considerado quebra constitucional.

6. Princípio Multi-App (Apps Simétricos)

Todos os aplicativos do sistema são estruturalmente iguais.
Nenhum aplicativo possui status especial ou hierarquia superior.
Nenhum aplicativo governa outro aplicativo.

Apps como:

system

vendas

fornecedor

futuros apps

são equivalentes em poder, arquitetura e autonomia.

7. Governança — Única Camada Soberana

Somente o aplicativo Governança possui autoridade sobre outros aplicativos.

Governança controla:

Usuários globais

Roles

Permissões

RBAC

Cadastro e registro de apps

Vínculo usuário ↔ app

Poder de acesso

Configurações globais estruturais

Auditoria e logs críticos

Constituição do sistema

Nenhum outro app pode governar nada fora do seu próprio domínio.

8. Apps — Soberania Restrita ao Próprio Domínio

Cada aplicativo:

Responde somente por si mesmo

Possui configurações próprias locais

Não interfere em outro app

Não governa permissões globais

Não altera leis estruturais

Exemplo prático
Tipo de Configuração	Local Correto
Permissões globais	Governança
Acesso a apps	Governança
Papéis e RBAC	Governança
Configurações internas do Vendas	Vendas
Configurações internas do System	System
Configurações internas do Fornecedor	Fornecedor
9. Princípio Territorial Canônico

Cada app é um mundo isolado.
Governança é o único poder supramundial.

Isso garante:

Clareza mental

Segurança estrutural

Organização limpa

Escalabilidade real

UX previsível

10. Princípio Anti-Caos

Se algo virar exceção, vira regra.
Se virar regra, vira padrão.
Se virar padrão, entra na Constituição.

Nada improvisado entra no core.

11. Princípio de Evolução Controlada

Mudanças arquiteturais só ocorrem se:

Documentadas

Justificadas

Versionadas

Formalmente aprovadas

12. Princípio de Longo Prazo

Decisões devem sobreviver anos, não apenas resolver o presente.

Preferimos:

Clareza > pressa

Estrutura > atalhos

Sustentabilidade > gambiarras

13. Autoridade Constitucional

Este documento tem autoridade máxima sobre:

Código

Arquitetura

Organização do projeto

Decisões técnicas

Se o código violar este documento, o código está errado — não a Constituição.

## Princípio de Separação entre Legado e Sistema Novo

O sistema legado **não define arquitetura futura**.

Ele deve ser usado somente como:
- Referência histórica
- Fonte de requisitos
- Base conceitual de regras de negócio

Nenhum arquivo, classe ou estrutura antiga deve ser reutilizada sem ser **reinterpretada sob a Nova Constituição**.

**O novo sistema nasce limpo, moderno e constitucional.**

