PROMPT CANÔNICO — CONTINUIDADE DO CHECKPOINT 03

(Front-End ERP Laravel 12)

RETOMADA — CHECKPOINT 03  
Front-End ERP Laravel 12 (Constitucional)

Contexto atual:
- Projeto: ERP Laravel 12 Multi-App
- Front-end regido pela Constituição Front-End (canônica)
- Branch ativo: feature/visual-profile-zones
- Código-fonte já contém:
  - UI Kit estabilizado (toast, loader, modal base, modal confirm, table)
  - Dashboard de testes funcional
  - Tokens institucionais base
  - Estrutura inicial de Visual Profile

Objetivo deste chat:
Finalizar a Fase 3 — Escala, com foco exclusivo em:
- Tokens
- Zonas visuais
- Visual Profile
- Dark / Light / Mixed Mode

Escopo imediato (ordem obrigatória):

1️⃣ Zonas Visuais
- Uso de `data-zone`:
  - app
  - navigation
  - content
  - auth
- Garantir que cada zona:
  - consuma apenas seus tokens
  - responda dinamicamente à troca de perfil visual

2️⃣ Tokens por Zona
- Aplicação correta dos tokens em:
  - navigation.*
  - content.*
  - auth.*
  - app.*
- Nenhum valor visual hardcoded
- Tokens como única fonte de verdade

3️⃣ Visual Profile
- Mapear perfis suportados:
  - light
  - dark
  - mixed-nav-dark
  - mixed-content-dark
- Persistência por usuário:
  - Base já existente: UserPreference
- Perfil deve:
  - sobreviver a reload
  - sobreviver a troca de app
  - funcionar em qualquer máquina

4️⃣ Theme Switch
- Troca de perfil:
  - em runtime
  - sem reload
- Aplicar apenas via tokens e zonas
- Sem hacks de classe global

5️⃣ Validações Funcionais
- Zonas devem reagir ao clique no switch
- Nenhum efeito colateral em:
  - layout
  - modal
  - toast
  - loader
- Conferir que navigation e content podem ter temas distintos

6️⃣ Refinamentos Finais (Fase 3)
- Estados globais:
  - disabled
  - loading
- Acessibilidade básica:
  - foco
  - aria essencial
- Micro-interações leves
- Polimento final (sem refatorar módulos prontos)

Regras de continuidade (OBRIGATÓRIAS):
- NÃO tocar nos módulos já estabilizados:
  - toast
  - loader
  - modal base
  - modal confirm
  - table
- Trabalhar exclusivamente em:
  - tokens
  - zonas
  - visual profile
- Commits pequenos, objetivos e frequentes
- Nada de retrabalho ou reconstrução do que já está pronto

Estado atual esperado:
- Branch limpo
- Checkpoint 03 preservado
- Continuidade direta, sem repetição de etapas
