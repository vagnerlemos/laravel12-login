// IA_BUILDER_KAISER_V2.cjs
// Gera arquivo IA-friendly com:
// - Índice
// - Seções por pasta
// - Arquivos CORE
// - Meta-header por arquivo
// - FILE_START / FILE_END
// - Ordem canônica

const fs = require("node:fs");
const path = require("node:path");

/* =========================================================
   CONFIG
========================================================= */

const CONFIG = {

    // 📜 Docs / constituição
    PASTAS1: [
        "docs/00_ACTIVE",
    ],

    // 🧠 Código principal
    PASTAS: [
        "app",
        "bootstrap",
        "config",
        "database",
        "resources",
        "routes",
    ],

    // 📄 Arquivos explícitos (opcional)
    ARQUIVOS: [],

    // ⭐ Arquivos CORE (prioridade máxima)
    CORE_FILES: [

        // Backend
        "bootstrap/app.php",
        "app/Providers/AppServiceProvider.php",
        "app/Providers/VisualProfileServiceProvider.php",

        // Frontend
        "resources/js/app.js",
        "resources/css/app.css",
        "resources/css/tokens/index.css",

        // Layout
        "resources/views/layouts/app.blade.php",
        "resources/views/layouts/auth.blade.php",
    ],

    // 🚫 Exclusões
    IGNORAR: [

        "vendor",
        "node_modules",
        ".git",
        ".idea",
        "dist",

        "resources/views/welcome.blade.php",
        "database/database.sqlite",

        "bootstrap/cache",
        "storage/framework",
        "storage/logs",
        "storage/debugbar",

        "storage/app/tmp",
        "storage/app/temp",
        "storage/app/private",

        "public/build",
        "public/hot",
        "public/mix-manifest.json",

        ".env",
        ".env.example",

        "npm-debug.log",
        "yarn-error.log",
        "pnpm-debug.log",

        "tests",

        ".vscode",
        "*.log",
        "*.bak",
        "*.tmp",

        "routes/console.php",
    ],

    // 📦 Saída
    MEGA_FILE: "Y3-IA-V2-laravel-12-codigo-fonte.md",
};
//              node IA_BUILDER_KAISER_V2.cjs


/* =========================================================
   SETUP
========================================================= */

const RAIZ = process.cwd();


/* =========================================================
   UTILS
========================================================= */

function caminhoRel(abs) {
    return path.relative(RAIZ, abs).replaceAll("\\", "/");
}

function deveIgnorar(absPath) {
    const norm = absPath.replaceAll("\\", "/");

    return CONFIG.IGNORAR.some(p => {

        if (p.includes("*")) {
            const regex = new RegExp(
                p.replace(/\./g, "\\.").replace(/\*/g, ".*")
            );
            return regex.test(norm);
        }

        return (
            norm.includes(`/${p}/`) ||
            norm.endsWith(`/${p}`)
        );
    });
}

function normalizar(texto) {
    return texto.replaceAll("\r\n", "\n").trim();
}


/* =========================================================
   COLETA
========================================================= */

function coletarPasta(baseDir, lista) {

    const itens = fs.readdirSync(baseDir, {
        withFileTypes: true
    });

    for (const item of itens) {

        const full = path.join(baseDir, item.name);

        if (deveIgnorar(full)) continue;

        if (item.isDirectory()) {
            coletarPasta(full, lista);
        }
        else {
            lista.push(full);
        }
    }
}

function resolverArquivo(relPath) {

    const abs = path.resolve(RAIZ, relPath);

    if (!fs.existsSync(abs)) return null;
    if (deveIgnorar(abs)) return null;

    return abs;
}


/* =========================================================
   META INFO
========================================================= */

function detectarTipoArquivo(rel) {

    if (rel.endsWith(".blade.php")) return "Blade View / Component";
    if (rel.endsWith(".php")) return "PHP Source";
    if (rel.endsWith(".js")) return "JavaScript Module";
    if (rel.endsWith(".css")) return "CSS / Tokens";
    if (rel.endsWith(".json")) return "JSON Config";

    return "Text File";
}

function detectarDominio(rel) {

    if (rel.startsWith("app/Http/Controllers")) return "Controller";
    if (rel.startsWith("app/Models")) return "Model";
    if (rel.startsWith("app/Services")) return "Service";
    if (rel.startsWith("app/Providers")) return "Provider";
    if (rel.startsWith("resources/views")) return "View / UI";
    if (rel.startsWith("resources/css")) return "Styles";
    if (rel.startsWith("resources/js")) return "Frontend Logic";
    if (rel.startsWith("database/migrations")) return "Migration";
    if (rel.startsWith("database/seeders")) return "Seeder";
    if (rel.startsWith("routes")) return "Routing";

    return "General";
}


/* =========================================================
   MAIN
========================================================= */

function main() {

    console.log("🧠 IA_BUILDER_KAISER_V2 iniciado...");

    const arquivos = [];
    const vistos = new Set();

    function pushArquivo(abs) {
        if (!vistos.has(abs)) {
            vistos.add(abs);
            arquivos.push(abs);
        }
    }


    /* =============================================
       1️⃣ COLETAR PASTAS
    ============================================= */

    for (const pasta of CONFIG.PASTAS) {

        const base = path.resolve(RAIZ, pasta);

        if (!fs.existsSync(base)) continue;

        const coletados = [];

        coletarPasta(base, coletados);

        for (const abs of coletados) {
            pushArquivo(abs);
        }
    }


    /* =============================================
       2️⃣ ARQUIVOS EXPLÍCITOS
    ============================================= */

    for (const arq of CONFIG.ARQUIVOS) {

        const abs = resolverArquivo(arq);

        if (abs) pushArquivo(abs);
    }


    /* =============================================
       3️⃣ PREPARAR CORE
    ============================================= */

    const coreSet = new Set();

    for (const core of CONFIG.CORE_FILES) {

        const abs = resolverArquivo(core);

        if (abs) {
            coreSet.add(abs);
        }
    }


    if (!arquivos.length) {
        console.log("⚠️ Nenhum arquivo encontrado.");
        return;
    }


    const linhas = [];


    /* =============================================
       ÍNDICE
    ============================================= */

    linhas.push("=== AI_FILE_INDEX_V2 ===");
    linhas.push("");

    for (const abs of arquivos) {

        const rel = caminhoRel(abs);

        const isCore = coreSet.has(abs)
            ? " [CORE]"
            : "";

        linhas.push(`FILE: ${rel}${isCore}`);
    }

    linhas.push("");
    linhas.push("=== END_AI_FILE_INDEX_V2 ===");
    linhas.push("\n");


    /* =============================================
       AGRUPAR POR PASTA
    ============================================= */

    const porPasta = {};

    for (const abs of arquivos) {

        const rel = caminhoRel(abs);

        const pasta = rel.split("/")[0];

        if (!porPasta[pasta]) {
            porPasta[pasta] = [];
        }

        porPasta[pasta].push(abs);
    }


    /* =============================================
       GERAR CONTEÚDO
    ============================================= */

    for (const pasta of Object.keys(porPasta)) {

        linhas.push("");
        linhas.push("##################################################");
        linhas.push(`### SECTION: ${pasta.toUpperCase()} ###`);
        linhas.push("##################################################");
        linhas.push("");


        for (const abs of porPasta[pasta]) {

            const rel = caminhoRel(abs);

            const conteudo = normalizar(
                fs.readFileSync(abs, "utf8")
            );

            const tipo = detectarTipoArquivo(rel);
            const dominio = detectarDominio(rel);
            const isCore = coreSet.has(abs);

            /* -------- Meta Header -------- */

            linhas.push("/**");
            linhas.push(` * FILE: ${rel}`);
            linhas.push(` * TYPE: ${tipo}`);
            linhas.push(` * DOMAIN: ${dominio}`);
            linhas.push(` * CORE: ${isCore ? "YES" : "NO"}`);
            linhas.push(" */");
            linhas.push("");


            /* -------- Conteúdo -------- */

            if (isCore) {
                linhas.push(">>> CORE_FILE <<<");
            }

            linhas.push(
                `<<<FILE_START: ${rel}>>>`
            );

            linhas.push(conteudo);

            linhas.push(
                `<<<FILE_END: ${rel}>>>`
            );

            linhas.push("");
        }
    }


    /* =============================================
       GRAVAR
    ============================================= */

    fs.writeFileSync(
        path.join(RAIZ, CONFIG.MEGA_FILE),
        linhas.join("\n"),
        "utf8"
    );

    console.log("✅ Gerado:", CONFIG.MEGA_FILE);
    console.log("🚀 IA_BUILDER V2 finalizado.");
}


/* =========================================================
   RUN
========================================================= */

main();
