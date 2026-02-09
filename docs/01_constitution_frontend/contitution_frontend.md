Constituição Front-end Erp Laravel
CONSTITUIÇÃO FRONT-END — ERP LARAVEL

Versão: 1.0 Status: Canônica Escopo: Todos os Apps (Governança, System, Vendas, CMS, Site)

1. PRINCÍPIO SUPREMO

O front-end do ERP deve ser:

Soberano

Modular

Padronizado

Escalável

Independente de frameworks pesados

Integrado nativamente ao Laravel

Nenhuma tela pode ser construída fora deste padrão.

2. STACK OFICIAL

Stack obrigatória:

Blade (Templates)

Vite (Build)

Tailwind CSS (Estilo)

Alpine.js (Interação)

SVG Icons (Heroicons / Pack Próprio)

Proibido:

Bootstrap

Admin Templates

React/Vue para UI base

jQuery

3. ESTRUTURA PADRÃO
resources/
 ├ css/
 │   ├ tokens/
 │   ├ base/
 │   ├ components/
 │   └ layouts/
 │
 ├ js/
 │   ├ core/
 │   └ components/
 │
 ├ views/
 │   ├ layouts/
 │   ├ components/
 │   └ auth/
 │
 └ ui/
     ├ buttons/
     ├ forms/
     ├ tables/
     ├ modals/
     ├ alerts/
     └ icons/

Nenhum arquivo fora dessa estrutura é permitido.

4. DESIGN TOKENS (PADRÕES VISUAIS)

Todos os estilos devem usar tokens.

Categorias:

Cores

Espaçamento

Tipografia

Bordas

Z-Index

Sombras

Proibido uso direto de cores hex no HTML.

5. UI KIT INTERNO (FERRAMENTAS DO SISTEMA)

O ERP deve possuir os seguintes módulos internos:

5.1 Ícones

SVG local

Helper Blade

Pack único

5.2 Overlay / Loader

Global

Bloqueante

Centralizado

5.3 Alerts / Mensagens

Tipos:

success

error

warning

info

Formato único.

5.4 Forms System

Inclui:

Label

Input

Error

Hint

Validation State

Layout único.

5.5 Tables System

Inclui:

Header fixo

Scroll

Ações

Responsivo

Paginação

5.6 Modals System

Inclui:

Overlay

ESC

Click outside

Focus trap

5.7 Buttons System

Tipos:

primary

secondary

danger

ghost

5.8 Layout / Grid

Define:

Containers

Colunas

Breakpoints

5.9 Navigation System

Inclui:

Sidebar

Topbar

Breadcrumb

Mobile menu

5.10 States System

Todo componente deve suportar:

loading

disabled

hover

focus

active

error

5.11 Toast / Notifications

Sistema flutuante de mensagens temporárias.

5.12 Empty States

Padrão para telas sem dados.

5.13 Upload System

Inclui:

Preview

Progress

Error

Limit

5.14 Confirmation System

Confirmações padronizadas para ações destrutivas.

6. PADRÃO DE COMPONENTES

Todo elemento reutilizável deve ser um componente Blade.

Formato:

<x-ui.button.primary />
<x-ui.modal.confirm />
<x-ui.form.input />

Proibido duplicar HTML estrutural.

7. PADRÃO DE INTERAÇÃO (ALPINE)

Interações devem ser declarativas.

Permitido:

x-data

x-show

x-model

x-on

Proibido JS inline não modular.

8. PADRÃO DE BUILD (VITE)

Entradas únicas:

resources/css/app.css

resources/js/app.js

Todos os módulos devem ser importados.

Nada é carregado manualmente.

9. RESPONSIVIDADE

Regra:

Mobile First obrigatório.

Breakpoints definidos em tokens.

Nenhuma tela desktop-first.

10. PADRÃO DE AUTENTICAÇÃO (LOGIN)

Cada App possui:

Tela própria

Background próprio

Estilo próprio

Compartilham:

Form

Validation

Alerts

Layout base

Local:

views/auth/{app}.blade.php
11. PADRÃO DE ERROS

Todos os erros devem:

Ser exibidos visualmente

Ter cor padronizada

Usar componente

Nunca texto cru.

12. GOVERNANÇA DE CÓDIGO

É proibido:

CSS solto em Blade

JS solto em Blade

Estilo duplicado

Componente improvisado

Toda exceção deve ser documentada.

13. EVOLUÇÃO DO SISTEMA

Novas ferramentas devem:

Entrar em /ui

Ter componente

Ter token

Ter documentação

Nenhuma ferramenta nasce informal.

14. ROADMAP BASE

Fase 1 — Fundação

Tokens

Alerts

Buttons

Forms

Loader

Fase 2 — Operação

Tables

Modals

Navigation

Toast

Fase 3 — Escala

Upload

Themes

Dark Mode

15. PRINCÍPIO FINAL

O Front-End é parte da governança.

Não é estética. É infraestrutura.

Toda tela deve respeitar:

Padronização

Reuso

Clareza

Estabilidade

FIM DA CONSTITUIÇÃO FRONT-END
