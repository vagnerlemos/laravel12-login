# 02_INSTALLATION_CHECKPOINT.md
## Base Universal — Laravel 12 — Evolução Pós-Bootstrap

### STATUS GERAL
Sistema avançou da fase de bootstrap para **fundação de Governança, Auth e Login Multi-App**.  
Decisões constitucionais críticas foram tomadas e implementadas.

---

## ✔ GOVERNANÇA — FUNDAÇÃO ESTRUTURAL

### Models Criados (Estado Puro)
Local: `app/Models/Governanca/`

- `User` → `gov_users`
- `App` → `gov_apps`
- `Role` → `gov_roles`
- `Permission` → `gov_permissions`
- `Granularity` → `gov_granularities`
- `ActivityLog` → `gov_activity_logs`

**Regras aplicadas:**
- Apenas `$table`, relações e casts
- Sem lógica de negócio
- Sem RBAC
- Sem Services
- Sem Policies

---

## ✔ AUTH CENTRALIZADA NA GOVERNANÇA

### Configuração de Autenticação
Arquivo: `config/auth.php`

- Provider `users` → `App\Models\Governanca\User`
- Guard `web` → session + provider governança
- Não existe mais `App\Models\User`
- Não existe autenticação fora da Governança

**Resultado:**  
Identidade global única, sem bypass estrutural.

---

## ✔ LOGIN MULTI-APP — CONSTITUCIONAL

### Constituição Criada
- **20_MULTI_APP_LOGIN_POLICY.md**

Define:
- Sessão global única
- Login realizado uma única vez
- Entrada por qualquer app
- Troca de app sem novo login
- Ordem correta:
  - rota → app → estado → vínculo → auth

Diferencia claramente:
- rota inexistente → 404
- app inexistente → 404
- app inativo → 503 (manutenção)

---

## ✔ UI/UX DO LOGIN — MODELO HÍBRIDO

### Constituição Criada
- **21_LOGIN_UI_UX_POLICY.md**

Define:
- Login visual exclusivo por app
- Blade por app
- Controller por app
- CSS/JS híbrido:
  - global para comportamento funcional
  - específico por app para identidade visual

Nenhum padrão visual forçado entre apps.

---

## ✔ MIDDLEWARE DE CONTEXTO (GOVERNANÇA)

### Middleware Implementado
`EnsureGovernancaContext`

**Correção aplicada:**
- NÃO bloqueia usuário não autenticado
- NÃO faz login
- Atua apenas quando há sessão
- Valida:
  - app existe
  - app ativo
  - vínculo usuário ↔ app

Middleware agora respeita a Constituição do Login Multi-App.

---

## ❌ REMOÇÕES IMPORTANTES

- Migrations padrão do Laravel (`users`, etc.) removidas
- Flag `is_system_locked` removida (controle via Policy/RBAC)
- Seeder automático genérico rejeitado
- Criação massiva de permissions por app rejeitada
- Governança isolada (não mistura outros apps)

---

## 📍 PONTO ATUAL DO PROJETO

**Fase atual:**  
Fundação de Governança + Auth + Login Multi-App (constitucional)

**Ainda NÃO iniciado:**
- Controllers de login
- Services de login
- Views de login
- Policies RBAC
- Migrations executadas
- Seeders finais

---

## ▶ PRÓXIMA FASE PLANEJADA
### **FASE 3 — Login da Governança**

Criar:
- LoginController (Governança)
- AppLoginService (central)
- Blade de login exclusivo da Governança
- Logs de login

Tudo respeitando:
- Constituição 20 (Login Multi-App)
- Constituição 21 (Login UI/UX)

---

## 🧠 INSTRUÇÃO PARA IA
Continuar a partir da **FASE 3 — Login da Governança**.

Premissas obrigatórias:
- Sessão global
- Login único
- UI exclusiva por app
- Auth centralizada
- Middleware já corrigido
- Nenhum uso de código legado
- Nenhuma alteração nas Constituições 20 e 21
