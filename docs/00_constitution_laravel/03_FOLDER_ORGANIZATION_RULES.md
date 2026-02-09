Constituição de Organização de Pastas — Laravel 12
Propósito

Este documento define as regras imutáveis de organização de pastas no projeto Laravel 12, garantindo:

Clareza estrutural

Separação por domínio

Leitura intuitiva

Escalabilidade

Zero ambiguidade futura

Organização sustentável a longo prazo

A localização de um arquivo define seu significado.

1. Princípio Supremo de Localização

Se um arquivo pertence a um APP, ele DEVE estar na pasta do APP.
Se um arquivo pertence a TODOS, ele DEVE permanecer global.
Nada deve ficar em local ambíguo.

2. Regra-Mestre: Laravel permanece intacto

Não criamos uma árvore paralela ao Laravel.
Utilizamos a estrutura oficial do Laravel e organizamos internamente apenas onde faz sentido.

Ou seja:

app/ continua sendo app/

resources/ continua sendo resources/

routes/ continua sendo routes/

database/ continua sendo database/

A organização ocorre dentro dessas pastas, não fora delas.

3. Estrutura Oficial de Separação por APP (já aprovada)
3.1 Models — Separação obrigatória por APP
app/Models/
  Governanca/
  System/
  Vendas/
  Site/


Regra:
Todo Model deve pertencer claramente a um domínio/app.

3.2 Controllers — Separação obrigatória por APP
app/Http/Controllers/
  Governanca/
  System/
  Vendas/
  Site/


Controllers nunca devem misturar responsabilidades entre apps.

3.3 Policies — Separação obrigatória por APP
app/Policies/
  Governanca/
  System/
  Vendas/


Autorização é domínio-específica.

3.4 Middleware — Separação por APP (fixada)
app/Http/Middleware/
  Governanca/
  System/
  Vendas/


Middleware sensível a contexto deve residir dentro do APP.

3.5 Views — Separação obrigatória por APP
resources/views/
  governanca/
  system/
  vendas/
  site/
  shared/


Regras:

Views específicas → pasta do app

Views globais reutilizáveis → shared/

3.6 Migrations — Separação obrigatória por APP
database/migrations/
  governanca/
  system/
  vendas/


Migração pertence ao domínio que criou a estrutura.

4. Pastas que NÃO serão separadas por APP (por enquanto)

Essas permanecem globais, com diferenciação por nome se necessário:

Providers
app/Providers/
  GovernancaServiceProvider.php
  SystemServiceProvider.php
  VendasServiceProvider.php

Services
app/Services/
  UserService.php
  GovernancaUserService.php

Helpers
app/Helpers/
  StringHelper.php
  DateHelper.php

Console Commands
app/Console/Commands/
  SyncGovernancaCommand.php
  SyncVendasCommand.php


Regra:

Só criaremos subpastas se houver volume suficiente para justificar.

5. Assets (CSS / JS) — Global vs APP
CSS
resources/css/
  global.css
  governanca.css
  system.css
  vendas.css

JS
resources/js/
  global.js
  governanca.js
  system.js


Regra:

Se TODOS usam → global

Se UM usa → nome do app

6. Routes — Separação por APP
routes/
  governanca.php
  system.php
  vendas.php
  site.php


Cada app possui seu próprio arquivo de rotas.

7. Critério para criar OU NÃO criar pastas
Criar pasta quando:

Houver muitos arquivos

Houver crescimento previsível

Houver risco de confusão

Domínio for claro e independente

NÃO criar pasta quando:

Houver poucos arquivos

Nome resolve organização

Pasta ficaria vazia

Não há ganho real de clareza

Pasta só existe quando gera clareza.
Pasta vazia é proibida.

8. Princípio da Leitura Intuitiva

Ao olhar a árvore, deve ser possível entender:
— A quem o arquivo pertence
— Em qual domínio ele atua
— Se é global ou específico
Sem abrir o arquivo.

9. Proibições Constitucionais

❌ Arquivo de APP fora da pasta do APP
❌ Arquivo GLOBAL dentro da pasta de APP
❌ Misturar responsabilidades entre apps
❌ Criar pastas sem função real
❌ Duplicar lógica entre domínios

10. Princípio Anti-Caos Estrutural

Organização é obrigatória.
Improvisação estrutural é proibida.
Exceções devem virar regra ou serem removidas.

11. Autoridade Constitucional

Este documento tem autoridade sobre:

Estrutura de pastas

Organização de código

Separação de domínios

Decisões futuras de arquitetura

Se o código violar este documento, o código está errado — não a Constituição.
