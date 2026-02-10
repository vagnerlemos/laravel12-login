// IA_BUILDER_KAISER_IA_ONLY.cjs
// Gera um único arquivo IA-friendly com índice + blocos FILE_START/FILE_END
// Respeita rigorosamente a ORDEM das pastas e arquivos declarados no CONFIG

const fs = require("node:fs");
const path = require("node:path");

const CONFIG = {
    // 📜 Constituição / diretrizes
    PASTAS1: [
        "docs/00_ACTIVE",
    ],

    // 🧠 Código-fonte principal
    PASTAS: [

        "app", "bootstrap",
        "config",
        "database",
        "resources",
        "routes",
        /**/
    ],

    // 📄 Arquivos específicos (ordem explícita)
    ARQUIVOS: [


        /* arquivos do novo log de atividades anti fraude */








        /*
        "app/Filament/Resources/RoleResource.php",
        "app/Filament/Resources/RoleResource/Pages/RoleTable.php",
        "resources/views/filament/roles/by-app.blade.php",
        "app/Filament/Resources/RoleResource/Pages/CreateRole.php",
        "app/Filament/Resources/RoleResource/Pages/EditRole.php",

*/

        /*
                "config/app.php",
                "app/Models/User.php",
                ".env",
                */
    ],

    // 🚫 Exclusões globais
    IGNORAR: [

        // 🚫 Globais (já definidos)
        "vendor",
        "node_modules",
        ".git",
        ".idea",
        "dist",
        "resources/views/welcome.blade.php",
        "database/database.sqlite",

        // 🚫 Cache / runtime Laravel
        "bootstrap/cache",
        "storage/framework",
        "storage/logs",
        "storage/debugbar",

        // 🚫 Temporários / dumps
        "storage/app/tmp",
        "storage/app/temp",
        "storage/app/private",

        // 🚫 Front-end build/cache
        "public/build",
        "public/hot",
        "public/mix-manifest.json",

        // 🚫 Arquivos de ambiente
        ".env",
        ".env.example",

        // 🚫 Logs e relatórios locais
        "npm-debug.log",
        "yarn-error.log",
        "pnpm-debug.log",

        // 🚫 Testes automáticos (não fazem parte do runtime)
        "tests",

        // 🚫 Arquivos de backup/editor
        ".vscode",
        "*.log",
        "*.bak",
        "*.tmp",

        // 🚫 Arquivos gerados pelo sistema
        "routes/console.php",
    ],



    // MEGA_FILE: "Y-database-laravel-12.md",
    MEGA_FILE: "Y-11-laravel-12-codigo-fonte.md",

};

//               NODE SCRIPT_IA_ONLY_EM_ORDEM.cjs




// ============================================================

const RAIZ = process.cwd();

/* ============================================================
   Utils
============================================================ */

function caminhoRel(abs) {
    return path.relative(RAIZ, abs).replaceAll("\\", "/");
}

function deveIgnorar(absPath) {
    const norm = absPath.replaceAll("\\", "/");
    return CONFIG.IGNORAR.some(p =>
        norm.includes(`/${p}/`) || norm.endsWith(`/${p}`)
    );
}

function normalizar(texto) {
    return texto.replaceAll("\r\n", "\n").trim();
}

/* ============================================================
   Coleta com ordem preservada
============================================================ */

/**
 * Coleta arquivos de uma pasta, mantendo:
 * - ordem natural do fs
 * - profundidade previsível
 * - sem sort global
 */
function coletarPasta(baseDir, lista) {
    const itens = fs.readdirSync(baseDir, { withFileTypes: true });

    for (const item of itens) {
        const full = path.join(baseDir, item.name);

        if (deveIgnorar(full)) continue;

        if (item.isDirectory()) {
            coletarPasta(full, lista);
        } else {
            lista.push(full);
        }
    }
}

/**
 * Resolve arquivo individual respeitando ordem do CONFIG
 */
function resolverArquivo(relPath) {
    const abs = path.resolve(RAIZ, relPath);

    if (!fs.existsSync(abs)) {
        console.log("⚠️ Arquivo não encontrado:", relPath);
        return null;
    }

    if (deveIgnorar(abs)) {
        console.log("⚠️ Arquivo ignorado:", relPath);
        return null;
    }

    return abs;
}

/* ============================================================
   MAIN
============================================================ */

function main() {
    console.log("🧠 IA_BUILDER_KAISER (ORDEM CANÔNICA) iniciado...");

    const arquivos = [];
    const vistos = new Set();

    function pushArquivo(abs) {
        if (!vistos.has(abs)) {
            vistos.add(abs);
            arquivos.push(abs);
        }
    }

    // 🔹 1. Pastas (ordem exata do CONFIG)
    for (const pasta of CONFIG.PASTAS) {
        const base = path.resolve(RAIZ, pasta);
        if (!fs.existsSync(base)) continue;

        const coletados = [];
        coletarPasta(base, coletados);

        for (const abs of coletados) {
            pushArquivo(abs);
        }
    }

    // 🔹 2. Arquivos individuais (ordem explícita)
    for (const arq of CONFIG.ARQUIVOS) {
        const abs = resolverArquivo(arq);
        if (abs) pushArquivo(abs);
    }

    if (arquivos.length === 0) {
        console.log("⚠️ Nenhum arquivo encontrado.");
        return;
    }

    const linhas = [];

    // 📑 Índice IA-friendly
    linhas.push("=== AI_FILE_INDEX ===");
    for (const abs of arquivos) {
        linhas.push(`FILE: ${caminhoRel(abs)}`);
    }
    linhas.push("=== END_AI_FILE_INDEX ===\n");

    // 📄 Conteúdo dos arquivos
    for (const abs of arquivos) {
        const rel = caminhoRel(abs);
        const conteudo = normalizar(fs.readFileSync(abs, "utf8"));

        linhas.push(
            `<<<FILE_START: ${rel}>>>\n` +
            conteudo +
            `\n<<<FILE_END: ${rel}>>>\n`
        );
    }

    fs.writeFileSync(
        path.join(RAIZ, CONFIG.MEGA_FILE),
        linhas.join("\n"),
        "utf8"
    );

    console.log("✅ Gerado:", CONFIG.MEGA_FILE);
    console.log("🎉 Ordem respeitada. Script limpo e canônico.");
}

main();
