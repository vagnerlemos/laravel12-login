# 21_LOGIN_UI_UX_POLICY.md

Constituição de UI/UX do Login Multi-App — Laravel 12

## Propósito

Este documento define as leis imutáveis de **interface, experiência do usuário e organização visual**
do sistema de login multi-app, garantindo:

- Liberdade total de identidade visual por APP
- Comportamento funcional consistente
- Reutilização técnica sem padronização estética forçada
- UX previsível e profissional
- Separação clara entre lógica e apresentação

---

## 1. Princípio Supremo

> **A lógica do login é global.  
> A experiência visual do login é do APP.**

Nenhum APP é obrigado a compartilhar identidade visual.
Nenhum APP pode quebrar o comportamento funcional padrão.

---

## 2. Separação Obrigatória: UI vs Comportamento

### 2.1 O que é EXCLUSIVO por APP

Cada APP **DEVE** poder customizar livremente:

- Layout HTML / Blade
- Cores
- Tipografia
- Imagens
- Branding
- Copy (textos)
- Organização visual
- Estilo do formulário

Exemplos válidos:
- Login com tema astronômico
- Login com tema agrícola
- Login minimalista
- Login corporativo

Nenhuma padronização visual é imposta.

---

### 2.2 O que é GLOBAL e COMPARTILHADO

Os seguintes comportamentos são **globais e obrigatórios**:

- Mensagem de credenciais inválidas
- Tratamento de erros de autenticação
- Estados de loading
- Desabilitação de submit
- Mensagens de app em manutenção
- Mensagens de acesso negado
- Fluxo de validação

Esses comportamentos **não podem divergir entre apps**.

---

## 3. CSS e JS — Modelo Híbrido Oficial

### 3.1 CSS Global (permitido)

Pode existir CSS global para:

- mensagens de erro
- estados (`.is-loading`, `.is-invalid`)
- alertas
- componentes funcionais (inputs, buttons base)
- acessibilidade

📁 Exemplo:
resources/css/auth-base.css


---

### 3.2 CSS por APP (obrigatório)

Cada APP pode (e deve) ter seu CSS próprio:

resources/css/governanca-login.css
resources/css/system-login.css
resources/css/vendas-login.css


O CSS do APP **sobrepõe** o global.

---

### 3.3 JS Global (permitido)

JS global pode conter:

- controle de submit
- prevenção de múltiplos envios
- loading
- exibição de erros
- helpers de UX

📁 Exemplo:
resources/js/auth-base.js


---

### 3.4 JS por APP (opcional)

Apps podem ter JS próprio se necessário, sem quebrar o fluxo global.

---

## 4. Views (Blade) — Organização Oficial

Cada APP possui seu próprio Blade de login:

resources/views/governanca/auth/login.blade.php
resources/views/system/auth/login.blade.php
resources/views/vendas/auth/login.blade.php


Não existe login Blade global obrigatório.

---

## 5. Controllers — Orquestração por APP

Cada APP possui seu próprio Controller de login:

- Resolve APP
- Renderiza UI específica
- Orquestra o fluxo
- Chama Service central

Controllers **não** duplicam lógica de autenticação.

---

## 6. Service de Login — Execução Global

A execução do login é centralizada em um Service comum:

- valida APP
- valida vínculo
- autentica
- cria sessão
- fixa contexto
- registra logs

O Service **não conhece UI**.

---

## 7. Mensagens e Erros (Lei de Consistência)

Mensagens funcionais devem ser:

- iguais em significado
- previsíveis
- auditáveis

A forma visual de exibição é livre.

---

## 8. Proibições

❌ Padronizar layout de login entre apps  
❌ Criar lógica de autenticação no Blade  
❌ Duplicar regras de login em Controllers  
❌ Mensagens funcionais divergentes entre apps  
❌ CSS global impor identidade visual  

---

## 9. Benefícios Arquiteturais

- UX consistente
- UI livre
- Código reutilizável
- Evolução independente de apps
- Sustentabilidade de longo prazo

---

## 10. Autoridade Constitucional

Este documento governa:

- UI/UX do login
- Organização de Blades
- Uso de CSS/JS no login
- Separação entre estética e comportamento

Se o código violar este documento,
o código está errado — não a UI.
