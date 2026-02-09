# 20_MULTI_APP_LOGIN_POLICY.md

Constituição do Login Multi-App — Laravel 12
(Governança Soberana / Sessão Global)

## Propósito

Este documento define as leis imutáveis do **login e autenticação multi-app** do sistema,
garantindo:

- Sessão global única
- Login realizado uma única vez
- Controle de acesso por APP via Governança
- Separação clara entre:
  - existência de rota
  - existência de app
  - estado do app
  - autenticação
  - autorização

Login mal definido gera bypass estrutural.
Esta Constituição elimina esse risco.

---

## 1. Princípio Supremo do Login

> **Login é global. Contexto é por APP.**

- O usuário possui **uma única identidade**
- A sessão é **única e compartilhada**
- O login acontece **uma única vez**
- Apps **não possuem autenticação própria**
- Apps apenas validam **contexto e vínculo**

---

## 2. Conceitos Fundamentais (Obrigatórios)

### 2.1 Sessão Global

- Uma vez autenticado, o usuário:
  - NÃO precisa logar novamente em outros apps
  - NÃO recria sessão
  - NÃO revalida senha

### 2.2 Contexto de APP

- Cada request opera em **um app ativo**
- O app é resolvido pela rota
- O contexto pode mudar sem novo login

Sessão ≠ Contexto

---

## 3. Existência de Rota vs Existência de APP

Esta distinção é **obrigatória**.

### 3.1 Rota não existe

Exemplo:
- `/vendas` não é rota registrada
- ou é apenas uma pasta/arquivo inexistente

➡️ Resultado:
- **404 Not Found**
- Não consultar banco
- Não consultar apps
- Não tratar como manutenção

---

### 3.2 Rota existe, mas APP não existe no banco

Exemplo:
- Rota `/vendas` existe
- Mas não há `gov_apps.code = vendas`

➡️ Resultado:
- **404 Not Found**
- O sistema não reconhece esse APP
- Não é manutenção
- Não é erro operacional

---

### 3.3 APP existe, mas está inativo

Exemplo:
- `gov_apps.code = vendas`
- `is_active = false`

➡️ Resultado:
- **503 Service Unavailable**
- APP em manutenção
- Mensagem institucional

---

### 3.4 APP existe e está ativo

➡️ Fluxo normal continua

---

## 4. Fluxo do PRIMEIRO LOGIN (sem sessão)

Exemplo: `/vendas/login`

### Ordem obrigatória

1. Resolver rota
   - Se rota não existe → 404

2. Resolver APP
   - Se não existe → 404
   - Se existe e está inativo → 503

3. Exibir tela de login do APP

4. Submissão de credenciais

5. Antes de autenticar:
   - usuário existe?
   - usuário está vinculado ao APP (`gov_app_user`)?

6. Autenticar (`Auth::attempt`)
7. Criar sessão global
8. Fixar contexto atual = APP
9. Redirecionar para dashboard do APP

---

## 5. Fluxo de ACESSO A OUTRO APP (com sessão)

Exemplo: usuário já logado acessa `/system`

### Ordem obrigatória

1. Resolver rota
   - Se não existe → 404

2. Resolver APP
   - Se não existe → 404
   - Se existe e está inativo → 503

3. Verificar sessão
   - Usuário já autenticado → OK

4. Verificar vínculo usuário ↔ APP
   - Se não tiver → 403

5. Fixar contexto atual = APP
6. Entrar direto (SEM login)

---

## 6. Proibições Absolutas

❌ Login global sem APP  
❌ Autenticar antes de validar APP  
❌ Criar sessão sem contexto  
❌ Pedir login novamente para usuário autenticado  
❌ Criar auth por APP  
❌ Middleware fazendo login  

---

## 7. Papel das Camadas

### Controller
- Orquestra login
- Resolve APP
- Chama Service

### Service
- Executa autenticação
- Cria sessão
- Registra log

### Middleware
- NÃO autentica
- NÃO valida senha
- Apenas valida sessão + contexto

### Policy
- NÃO participa do login
- Atua após autenticação

---

## 8. Governança como Fonte de Verdade

- Usuários são globais
- Apps são registrados na Governança
- Vínculo usuário ↔ app é soberano
- Nenhum app decide acesso sozinho

---

## 9. Logs de Login

Devem ser registrados:

- login bem-sucedido
- logout
- troca de contexto de app (opcional)

Não registrar:
- tentativas comuns inválidas
- navegação

---

## 10. Autoridade Constitucional

Este documento governa:

- Fluxo de login
- Sessões
- Autenticação
- Troca de contexto entre apps

Se o código violar este documento,
o código está errado — não a Constituição.
