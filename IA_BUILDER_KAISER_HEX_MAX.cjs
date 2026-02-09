//             node IA_BUILDER_KAISER_HEX_MAX.cjs
// HEX SYSTEM NÍVEL MÁXIMO — IA-Native Architecture

const fs = require("node:fs");
const path = require("node:path");

const RAIZ = process.cwd();

const CONFIG = {

    OUTPUT_DIR: "y_hex_output",

    IGNORAR: [
        "vendor", "node_modules", ".git", ".idea", "dist"
    ],

    VERSION: "v1.0.0",

    HEX_GROUPS: [
        {
            key: "CONSTITUTION",
            description: "Constituição do projeto: regras canônicas, políticas, arquitetura e diretrizes para IA e governança",
            topics: [
                "constitution",
                "governance",
                "architecture",
                "policies",
                "rules",
                "ai-protocol",
                "security",
                "rbac",
                "standards"
            ],
            namespaces: [],
            filamentResource: null,
            files: [
                "docs/00_constitution/00_AI_ROLE.md",
                "docs/00_constitution/01_ARCHITECTURE_PRINCIPLES.md",
                "docs/00_constitution/02_SYSTEM_TREE.md",
                "docs/00_constitution/03_FOLDER_ORGANIZATION_RULES.md",
                "docs/00_constitution/04_DATABASE_LAWS.md",
                "docs/00_constitution/05_RBAC_ARCHITECTURE_MAPPING.md",
                "docs/00_constitution/06_RBAC_RULES.md",
                "docs/00_constitution/07_LOGGING_POLICY.md",
                "docs/00_constitution/08_SECURITY_POLICY.md",
                "docs/00_constitution/09_AUTHENTICATION_POLICY.md",
                "docs/00_constitution/10_DATA_PROTECTION_POLICY.md",
                "docs/00_constitution/11_API_POLICY.md",
                "docs/00_constitution/12_UI_UX_RULES.md",
                "docs/00_constitution/13_CODING_STANDARDS.md",
                "docs/00_constitution/14_PERFORMANCE_POLICY.md",
                "docs/00_constitution/15_DEPLOYMENT_POLICY.md",
                "docs/00_constitution/16_MAINTENANCE_POLICY.md",
                "docs/00_constitution/17_AI_USAGE_PROTOCOL.md",
                "docs/00_constitution/18_LEGACY_USAGE_POLICY.md"
            ]
        }
        ,
        {
            key: "USERS",
            description: "Usuários, autenticação, RBAC por usuário, apps vinculados",
            topics: ["users", "auth", "login", "profiles", "user-permissions"],
            namespaces: ['App\\Models\\User", "App\\Policies\\UserPolicy'],
            filamentResource: "UserResource",
            files: [
                "app/Models/User.php",
                "app/Policies/UserPolicy.php",

                "app/Filament/Resources/UserResource.php",
                "app/Filament/Resources/UserResource/Pages/CreateUser.php",
                "app/Filament/Resources/UserResource/Pages/EditUser.php",
                "app/Filament/Resources/UserResource/Pages/ListUsers.php",

                "app/Http/Controllers/System/UserController.php",

                "resources/views/system/users/create.blade.php",
                "resources/views/system/users/edit.blade.php",
                "resources/views/system/users/form.blade.php",
                "resources/views/system/users/index.blade.php",

                "database/migrations/2014_10_12_000000_create_users_table.php",
                "database/migrations/2026_01_22_140423_add_is_active_to_users_table.php"
            ]
        },
        //ROLES(CARGOS)
        {
            key: "ROLES",
            description: "Cargos, permissões associadas, granularidades vinculadas",
            topics: ["roles", "cargos", "rbac"],
            namespaces: ["App\\Models\\Role", "App\\Policies\\RolePolicy"],
            filamentResource: "RoleResource",
            files: [
                "app/Models/Role.php",
                "app/Policies/RolePolicy.php",

                "app/Filament/Resources/RoleResource.php",
                "app/Filament/Resources/RoleResource/Pages/CreateRole.php",
                "app/Filament/Resources/RoleResource/Pages/EditRole.php",
                "app/Filament/Resources/RoleResource/Pages/RolesByApp.php",
                "app/Filament/Resources/RoleResource/Pages/RoleTable.php",

                "app/Http/Controllers/System/RoleController.php",

                "resources/views/system/roles/form.blade.php",
                "resources/views/system/roles/index.blade.php",

                "database/migrations/2026_01_13_000001_create_roles_table.php",
                "database/migrations/2026_01_13_000004_create_role_user_table.php"
            ]
        },
        //PERMISSIONS
        {
            key: "PERMISSIONS",
            description: "Permissões do sistema e agrupamento por recurso",
            topics: ["permissions", "grants", "access-control"],
            namespaces: ["App\\Models\\Permission", "App\\Policies\\PermissionPolicy"],
            filamentResource: "PermissionResource",
            files: [
                "app/Models/Permission.php",
                "app/Policies/PermissionPolicy.php",

                "app/Filament/Resources/PermissionResource.php",
                "app/Filament/Resources/PermissionResource/Pages/EditPermission.php",
                "app/Filament/Resources/PermissionResource/Pages/PermissionsByApp.php",
                "app/Filament/Resources/PermissionResource/Pages/PermissionsPanelByApp.php",

                "app/Http/Controllers/System/PermissionController.php",

                "resources/views/system/permissions/edit.blade.php",
                "resources/views/system/permissions/index.blade.php",

                "database/migrations/2026_01_13_000002_create_permissions_table.php",
                "database/migrations/2026_01_13_000003_create_permission_role_table.php",
                "database/migrations/2026_01_28_000001_add_labels_to_permissions_table.php",
                "database/migrations/2026_01_28_000005_add_resource_group_fields_to_permissions_table.php"
            ]
        },
        //GRANULARITIES(RESTRIÇÕES)
        {
            key: "GRANULARITIES",
            description: "Granularidades (negações) e escopo de acesso",
            topics: ["granularities", "restrictions", "rbac-negative"],
            namespaces: ["App\\Models\\Granularity", "App\\Policies\\GranularityPolicy"],
            filamentResource: "GranularityResource",
            files: [
                "app/Models/Granularity.php",
                "app/Policies/GranularityPolicy.php",

                "app/Filament/Resources/GranularityResource.php",
                "app/Filament/Resources/GranularityResource/Pages/EditGranularity.php",
                "app/Filament/Resources/GranularityResource/Pages/ListGranularities.php",

                "app/Http/Controllers/System/GranularityController.php",

                "resources/views/system/granularities/edit.blade.php",
                "resources/views/system/granularities/index.blade.php",

                "database/migrations/2026_01_14_000001_create_granularities_table.php",
                "database/migrations/2026_01_28_000002_add_labels_to_granularities_table.php",
                "database/migrations/2026_01_28_000006_add_resource_group_fields_to_granularities_table.php"
            ]
        },
        //APPLICATIONS(APPS)
        {
            key: "APPLICATIONS",
            description: "Cadastro e gestão de aplicações do sistema",
            topics: ["apps", "applications", "multi-app"],
            namespaces: ["App\\Models\\Application", "App\\Policies\\ApplicationPolicy"],
            filamentResource: "ApplicationResource",
            files: [
                "app/Models/Application.php",
                "app/Policies/ApplicationPolicy.php",

                "app/Filament/Resources/ApplicationResource.php",
                "app/Filament/Resources/ApplicationResource/Pages/EditApplication.php",
                "app/Filament/Resources/ApplicationResource/Pages/ListApplications.php",

                "app/Http/Controllers/System/ApplicationController.php",

                "resources/views/system/apps/edit.blade.php",
                "resources/views/system/apps/index.blade.php",

                "database/migrations/2026_01_12_100000_create_apps_table.php",
                "database/migrations/2026_01_14_000004_add_description_to_apps_table.php"
            ]
        },
        //ACTIVITY LOGS / ANTIFRAUDE
        {
            key: "ACTIVITY_LOG",
            description: "Logs de atividade, antifraude, auditoria, risk score",
            topics: ["logs", "audit", "antifraud", "activity"],
            namespaces: ["App\\Models\\ActivityLog", "App\\Policies\\ActivityLogPolicy"],
            filamentResource: "ActivityLogResource",
            files: [
                "app/Models/ActivityLog.php",
                "app/Models/ActivityLogRollup.php",
                "app/Policies/ActivityLogPolicy.php",

                "app/Services/ActivityLogger.php",

                "app/Console/Commands/RollupActivityLogs.php",
                "app/Filament/Resources/ActivityLogResource.php",
                "app/Filament/Resources/ActivityLogResource/Pages/ListActivityLogs.php",
                "app/Filament/Resources/ActivityLogResource/Pages/ViewActivityLog.php",

                "app/Filament/Widgets/ActivityLogs/RiskKpis.php",
                "app/Filament/Widgets/ActivityLogs/RiskTrendChart.php",
                "app/Filament/Widgets/ActivityLogs/TopRiskUsersTable.php",
                "app/Filament/Pages/ActivityLogs/RiskCenter.php",

                "app/Http/Controllers/System/ActivityLogController.php",

                "resources/views/system/activity_logs/index.blade.php",
                "resources/views/system/activity_logs/show.blade.php",
                "resources/views/filament/activitylogs/risk-center.blade.php",

                "database/migrations/2026_01_14_000001_create_activity_logs_table.php",
                "database/migrations/2026-01-29-000002-create_activity_log_rollups_table.php",
                "database/migrations/2026_01_29_000001_upgrade_activity_logs_table.php"
            ]
        },
        //CLIENTS(SYSTEM)
        {
            key: "CLIENTS",
            description: "Clientes do sistema (módulo System)",
            topics: ["clients", "system-clients"],
            namespaces: ["App\\Models\\System\\Client", "App\\Policies\\System\\ClientPolicy"],
            filamentResource: "ClientResource",
            files: [
                "app/Models/System/Client.php",
                "app/Policies/System/ClientPolicy.php",

                "app/Filament/Resources/System/ClientResource.php",
                "app/Filament/Resources/System/ClientResource/Pages/CreateClient.php",
                "app/Filament/Resources/System/ClientResource/Pages/EditClient.php",
                "app/Filament/Resources/System/ClientResource/Pages/ListClients.php",

                "app/Http/Controllers/System/ClientController.php",

                "resources/views/system/clients/create.blade.php",
                "resources/views/system/clients/edit.blade.php",
                "resources/views/system/clients/form.blade.php",
                "resources/views/system/clients/index.blade.php",

                "database/migrations/2026_01_12_300000_create_clients_table.php"
            ]
        },
        //CORE / INFRA(compartilhado)
        {
            key: "CORE_INFRA",
            description: "Kernel, Providers, Middlewares, rotas e base do sistema",
            topics: ["core", "providers", "middleware", "routes"],
            namespaces: ["App\\Providers", "App\\Http\\Middleware"],
            files: [
                "app/Providers/AppServiceProvider.php",
                "app/Providers/AuthServiceProvider.php",
                "app/Providers/EventServiceProvider.php",
                "app/Providers/RouteServiceProvider.php",
                "app/Providers/Filament/SystemPanelProvider.php",

                "app/Http/Kernel.php",
                "app/Http/Middleware/Authenticate.php",
                "app/Http/Middleware/CheckPermission.php",
                "app/Http/Middleware/EnsureContextIsAccessible.php",

                "routes/system.php",
                "routes/web.php",
                "routes/api.php",
                "routes/vendas.php"
            ]
        },
        //AUTH / LOGIN / IDENTITY
        {
            key: "AUTH_IDENTITY",
            description: "Autenticação, login, logout, perfil do usuário",
            topics: ["auth", "login", "logout", "identity", "profile"],
            namespaces: ["App\\Http\\Controllers\\Auth", "App\\Filament\\Identity"],
            files: [
                "app/Http/Controllers/Auth/LoginController.php",
                "app/Listeners/LogFailedLogin.php",
                "app/Http/Responses/LogoutResponse.php",

                "app/Filament/Identity/Pages/MyProfile.php",

                "resources/views/auth/login.blade.php",
                "resources/views/auth/login200126.blade.php",
                "resources/views/filament/pages/my-profile.blade.php",

                "config/auth.php"
            ]
        },

        //SYSTEM DASHBOARD / LAYOUT / UI BASE
        {
            key: "SYSTEM_UI",
            description: "Layout do painel System, dashboard, navegação, sidebar",
            topics: ["system-ui", "dashboard", "layout"],
            files: [
                "app/Http/Controllers/System/SystemController.php",

                "resources/views/system/dashboard.blade.php",
                "resources/views/system/layouts/app.blade.php",
                "resources/views/system/layouts/partials/sidebar.blade.php",
                "resources/views/system/layouts/partials/topbar.blade.php",
                "resources/views/system/layouts/partials/pagination.blade.php"
            ]
        },

        //VENDAS(APP VENDAS)
        {
            key: "VENDAS",
            description: "Módulo Vendas, rotas e dashboard",
            topics: ["vendas", "sales", "orders"],
            namespaces: ["App\\Http\\Controllers\\Vendas"],
            files: [
                "app/Http/Controllers/Vendas/VendasController.php",

                "routes/vendas.php",

                "resources/views/vendas/dashboard.blade.php"
            ]
        },

        //SITE PÚBLICO(FRONT)
        {
            key: "SITE_PUBLIC",
            description: "Site público institucional",
            topics: ["site", "frontend", "public"],
            files: [
                "resources/views/site/home.blade.php",
                "resources/views/site/sobre.blade.php",
                "resources/views/site/contato.blade.php",
                "resources/views/site/layouts/app.blade.php",

                "routes/web.php"
            ]
        },

        //ROUTES / HTTP ENTRYPOINTS
        {
            key: "ROUTES_HTTP",
            description: "Rotas HTTP, API, System e Console",
            topics: ["routes", "http", "api"],
            files: [
                "routes/web.php",
                "routes/system.php",
                "routes/api.php",
                "routes/channels.php",
                "routes/console.php"
            ]
        },

        //CONSOLE / COMMANDS / SCHEDULE
        {
            key: "CONSOLE_JOBS",
            description: "Jobs agendados, comandos Artisan e kernel",
            topics: ["console", "artisan", "cron"],
            files: [
                "app/Console/Kernel.php",
                "app/Console/Commands/RollupActivityLogs.php",
                "routes/console.php"
            ]
        },

        //MIDDLEWARE / SECURITY
        {
            key: "MIDDLEWARE_SECURITY",
            description: "Middlewares, segurança, contexto, permissões",
            topics: ["middleware", "security", "context"],
            namespaces: ["App\\Http\\Middleware"],
            files: [
                "app/Http/Middleware/Authenticate.php",
                "app/Http/Middleware/CheckPermission.php",
                "app/Http/Middleware/EnsureContextIsAccessible.php",
                "app/Http/Middleware/RedirectIfAuthenticated.php",
                "app/Http/Middleware/VerifyCsrfToken.php",
                "app/Http/Middleware/EncryptCookies.php",
                "app/Http/Middleware/TrimStrings.php",
                "app/Http/Middleware/TrustHosts.php",
                "app/Http/Middleware/TrustProxies.php",
                "app/Http/Middleware/ValidateSignature.php",
                "app/Http/Middleware/PreventRequestsDuringMaintenance.php"
            ]
        },

        //DATABASE / MIGRATIONS / SEEDS
        {
            key: "DATABASE_SCHEMA",
            description: "Migrations, seeds, factories e estrutura do banco",
            topics: ["database", "migrations", "seeds"],
            files: [
                "database/migrations/2014_10_12_000000_create_users_table.php",
                "database/migrations/2026_01_12_100000_create_apps_table.php",
                "database/migrations/2026_01_12_200000_create_app_user_table.php",
                "database/migrations/2026_01_12_300000_create_clients_table.php",
                "database/migrations/2026_01_13_000001_create_roles_table.php",
                "database/migrations/2026_01_13_000002_create_permissions_table.php",
                "database/migrations/2026_01_14_000001_create_activity_logs_table.php",

                "database/seeders/DatabaseSeeder.php",
                "database/seeders/AdminUserSeeder.php",
                "database/seeders/AppSeeder.php",
                "database/seeders/SystemGranularitySeeder.php",
                "database/seeders/SystemPermissionsSeeder.php",

                "database/factories/UserFactory.php"
            ]
        },

        //CONFIG / ENV / SERVICES
        {
            key: "CONFIG_SYSTEM",
            description: "Configurações Laravel, cache, sessão, mail, serviços",
            topics: ["config", "env", "services"],
            files: [
                "config/app.php",
                "config/database.php",
                "config/cache.php",
                "config/session.php",
                "config/mail.php",
                "config/services.php",
                "config/logging.php",
                "config/filesystems.php",
                "config/view.php",
                "config/cors.php",
                "config/queue.php",
                "config/sanctum.php"
            ]
        },

        //ASSETS / CSS / JS / LANG
        {
            key: "ASSETS_UI",
            description: "Assets frontend, JS, CSS, traduções",
            topics: ["assets", "css", "js", "lang"],
            files: [
                "resources/css/app.css",
                "resources/css/filament-overrides.css",

                "resources/js/app.js",
                "resources/js/bootstrap.js",

                "resources/lang/pt_BR/filament.php"
            ]
        },

        //PROVIDERS / CORE BOOTSTRAP
        {
            key: "PROVIDERS_CORE",
            description: "Service Providers e bootstrap do Laravel",
            topics: ["providers", "bootstrap", "laravel-core"],
            namespaces: ["App\\Providers"],
            files: [
                "app/Providers/AppServiceProvider.php",
                "app/Providers/AuthServiceProvider.php",
                "app/Providers/BroadcastServiceProvider.php",
                "app/Providers/EventServiceProvider.php",
                "app/Providers/RouteServiceProvider.php",
                "app/Providers/Filament/SystemPanelProvider.php"
            ]
        }
    ]
};

/* ========================= */

function ensureDir(dir) {
    if (!fs.existsSync(dir)) fs.mkdirSync(dir);
}

function caminhoRel(abs) {
    return path.relative(RAIZ, abs).replaceAll("\\", "/");
}

function normalizar(texto) {
    return texto.replaceAll("\r\n", "\n").trim();
}

function resolverArquivo(relPath) {
    const abs = path.resolve(RAIZ, relPath);
    if (!fs.existsSync(abs)) return null;
    return abs;
}

/* ========================= */

function gerarHex(hex) {

    const arquivos = [];

    for (const f of hex.files) {
        const abs = resolverArquivo(f);
        if (abs) arquivos.push(abs);
    }

    if (!arquivos.length) return;

    const linhas = [];

    // HEADER CANÔNICO LLM
    linhas.push("=== AI_HEX_HEADER ===");
    linhas.push(`HEX_KEY: ${hex.key}`);
    linhas.push(`HEX_VERSION: ${CONFIG.VERSION}`);
    linhas.push(`HEX_PURPOSE: ${hex.description}`);
    linhas.push(`HEX_TOPICS: ${hex.topics.join(", ")}`);
    linhas.push(`HEX_FILAMENT_RESOURCE: ${hex.filamentResource || "none"}`);
    linhas.push("HEX_USAGE_POLICY:");
    linhas.push("- Leia SOMENTE este HEX se a pergunta tratar deste domínio.");
    linhas.push("- NÃO leia outros HEXs.");
    linhas.push("- Responda SOMENTE com base neste HEX.");
    linhas.push("=== END_AI_HEX_HEADER ===\n");

    // SUB-HEX INDEX
    linhas.push("=== AI_SUBHEX_INDEX ===");
    linhas.push("SUBHEX: MODELS");
    linhas.push("SUBHEX: POLICIES");
    linhas.push("SUBHEX: FILAMENT_RESOURCES");
    linhas.push("SUBHEX: MIGRATIONS");
    linhas.push("SUBHEX: VIEWS");
    linhas.push("=== END_AI_SUBHEX_INDEX ===\n");

    // FILE INDEX
    linhas.push("=== AI_FILE_INDEX ===");
    for (const abs of arquivos) {
        linhas.push(`FILE: ${caminhoRel(abs)}`);
    }
    linhas.push("=== END_AI_FILE_INDEX ===\n");

    // FILE CONTENT
    for (const abs of arquivos) {
        const rel = caminhoRel(abs);
        const conteudo = normalizar(fs.readFileSync(abs, "utf8"));

        linhas.push(
            `<<<FILE_START: ${rel}>>>\n` +
            conteudo +
            `\n<<<FILE_END: ${rel}>>>\n`
        );
    }

    const outputPath = path.join(CONFIG.OUTPUT_DIR, `Y-HEX-${hex.key}.md`);
    fs.writeFileSync(outputPath, linhas.join("\n"), "utf8");
}

/* ========================= */

function gerarHexMap() {

    const mapa = {
        version: CONFIG.VERSION,
        generatedAt: new Date().toISOString(),
        hexes: []
    };

    for (const hex of CONFIG.HEX_GROUPS) {
        mapa.hexes.push({
            key: hex.key,
            file: `Y-HEX-${hex.key}.md`,
            description: hex.description,
            topics: hex.topics,
            namespaces: hex.namespaces,
            filamentResource: hex.filamentResource || null
        });
    }

    fs.writeFileSync(
        path.join(CONFIG.OUTPUT_DIR, "HEX_MAP.json"),
        JSON.stringify(mapa, null, 2),
        "utf8"
    );
}

/* ========================= */

function gerarMasterIndex() {

    const linhas = [];

    linhas.push("=== AI_HEX_MASTER_INDEX ===\n");

    linhas.push("INSTRUCTION_TO_AI:");
    linhas.push("- Antes de responder qualquer pergunta, escolha o HEX correto abaixo.");
    linhas.push("- Leia SOMENTE o HEX selecionado.");
    linhas.push("- Ignore TODOS os outros HEXs.");
    linhas.push("- NÃO leia arquivos fora do HEX selecionado.\n");

    linhas.push("HEX_LIST:");

    for (const hex of CONFIG.HEX_GROUPS) {
        linhas.push(`HEX_KEY: ${hex.key}`);
        linhas.push(`FILE: Y-HEX-${hex.key}.md`);
        linhas.push(`TOPICS: ${hex.topics.join(", ")}`);
        linhas.push("");
    }

    linhas.push("=== END_AI_HEX_MASTER_INDEX ===");

    fs.writeFileSync(
        path.join(CONFIG.OUTPUT_DIR, "HEX-MASTER-INDEX.md"),
        linhas.join("\n"),
        "utf8"
    );
}


/* ========================= */

console.log("🧠 IA_BUILDER_KAISER HEX MAX iniciado...");

ensureDir(CONFIG.OUTPUT_DIR);

for (const hex of CONFIG.HEX_GROUPS) {
    gerarHex(hex);
}

gerarHexMap();
gerarMasterIndex();

console.log("✅ HEXs gerados");
console.log("✅ HEX_MAP.json criado");
console.log("✅ MASTER INDEX criado");
console.log("🎉 HEX SYSTEM NÍVEL MÁXIMO ATIVO");
