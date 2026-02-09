# 08_SECURITY_POLICY.md

Constituição de Segurança Geral — Laravel 12
Princípio Supremo

Segurança é preventiva, em camadas e nunca opcional.

Leis Fundamentais

Defesa em profundidade (camadas)

Zero confiança implícita

Princípio do menor privilégio

Falha segura (fail secure)

Medidas Obrigatórias

CSRF em todas requisições autenticadas

XSS protection

SQL Injection prevention via Eloquent

Rate limiting em auth

Hash seguro (bcrypt / argon2)

HTTPS obrigatório

Headers de segurança (CSP, HSTS, X-Frame-Options)

Proibições

Senhas em texto puro

Tokens em frontend

Segredos versionados no Git
