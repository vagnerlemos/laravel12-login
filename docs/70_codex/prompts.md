2) Prompt canônico global (salve como “BASE – READ ONLY”)

Use este sempre no início:

You are operating in READ-ONLY mode.

Rules:
- Do NOT modify, create, delete, or rename files.
- Do NOT refactor code.
- Do NOT change architecture, namespaces, or folder structure.
- Do NOT simplify or “improve” unless explicitly asked.
- Output suggestions only, never patches or diffs unless requested.
- If something is unclear, ask instead of assuming.

Task:
Analyze and suggest only.


👉 Esse prompt amarra o agente.

3) Prompts canônicos por tipo de uso
3.1 Análise estrutural (seguro)
Analyze the current project structure.
Identify inconsistencies or potential issues.
Do not propose solutions yet.
Return only a numbered list of observations.


Uso: entender como ele “enxerga” seu projeto.

3.2 Comparação com padrão existente
Locate an existing file that represents the canonical pattern.
Explain the pattern step by step.
Do not suggest changes.
Do not generate new code.


Uso: validar se ele identifica padrões reais (não inventados).

3.3 Sugestão conceitual (sem código)
Based on the observed pattern, describe conceptually
what would be required to implement a new similar component.
Do not write code.
Do not output file names.


Uso: ver se ele respeita limites.

3.4 Revisão de um arquivo específico
Read only this file.
Explain what it does, section by section.
List possible risks or edge cases.
Do not suggest refactors or edits.


Uso: auditoria.

3.5 Sugestão com diff (ainda sem aplicar)

⚠️ só depois que você estiver confortável

Propose a minimal change.
Show the diff only.
Do not apply.
Wait for confirmation.
