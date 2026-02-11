PROTOCOLO DE TRABALHO — PROJETO BASE UNIVERSAL
1. OBJETIVO

Estabelecer um padrão único de colaboração entre usuário e IA, garantindo:

Continuidade técnica

Consistência arquitetural

Consulta permanente ao código-fonte

Eliminação de ambiguidades

Histórico evolutivo confiável

Todo o código-fonte fornecido deve ser tratado como fonte primária de verdade.

2. ARQUIVO-FONTE CANÔNICO
2.1 Natureza

O arquivo-fonte fornecido pelo usuário deve ser tratado como:

Prompt permanente

Base de consulta obrigatória

Referência arquitetural oficial

Ele permanece válido durante todo o chat.

2.2 Uso Obrigatório

Antes de qualquer modificação, a IA deve:

Consultar controllers

Consultar providers

Consultar middlewares

Consultar services

Consultar views

Consultar tokens

Consultar qualquer dependência relacionada

Não é permitido assumir estrutura sem consulta.

3. MEMÓRIA EVOLUTIVA DO SISTEMA

Sempre que houver alteração:

O novo estado passa a ser o estado válido

O anterior é considerado obsoleto

A IA deve internalizar a mudança

Exemplo:

Controller mudou → novo padrão é o válido

Middleware mudou → novo padrão é o válido

A arquitetura é considerada viva e evolutiva.

4. PADRÃO OBRIGATÓRIO DE ENTREGA DE ARQUIVOS

Toda criação ou alteração segue exatamente este formato.

4.1 Bloco 1 — Caminho do Arquivo

Sempre informar:

Caminho completo desde a raiz do projeto

Em bloco de código (obrigatório)

Isolado do restante da resposta

Copiável via botão automático do ChatGPT

Sem texto antes ou depois dentro do mesmo bloco

Formato obrigatório:

caminho/completo/do/arquivo.ext


Exemplo correto:

resources/views/auth/login.blade.php

4.2 Bloco 2 — Conteúdo do Arquivo

Sempre informar:

Arquivo completo

Versão final

Sem cortes

Sem diff

Sem trechos

Sem omissões

Pronto para copiar e colar.

Exemplo:

<conteúdo integral do arquivo>

5. REGRAS OPERACIONAIS
5.1 Proibições

É proibido:

Enviar partes de arquivos

Enviar apenas trechos

Enviar “diff”

Pedir para o usuário completar código

Trabalhar sem consultar o código-fonte

5.2 Substituição Total

Todo arquivo enviado:

Substitui integralmente o anterior

Passa a ser a versão oficial

Entra na memória do projeto

6. ESCOPO DO PADRÃO

Este protocolo se aplica igualmente a:

Arquivos novos

Arquivos alterados

Tokens

JavaScript

Blade

Services

Controllers

Providers

Middlewares

Configurações

Sem exceções.

7. FLUXO DE TRABALHO OFICIAL

Usuário fornece código-fonte canônico

IA carrega e internaliza

IA consulta antes de alterar

IA entrega sempre em dois blocos

Usuário copia e cola

Novo estado passa a ser válido

Ciclo continua

8. STATUS

Protocolo: Ativo

Cumprimento: Obrigatório

Prioridade: Máxima

Validade: Durante todo o projeto
