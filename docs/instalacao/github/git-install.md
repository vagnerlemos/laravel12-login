entrar no site com login e senha
    https://github.com/
        crie um novo repositorio:   
            laravel12-login

powershell:
    Inicializar o Git 
        git init

    Criar .gitignore (MUITO IMPORTANTE no Laravel)
        Se ainda não existir:
            notepad .gitignore
                *.log
                .DS_Store
                .env
                .env.backup
                .env.production
                .phpactor.json
                .phpunit.result.cache
                /.fleet
                /.idea
                /.nova
                /.phpunit.cache
                /.vscode
                /.zed
                /auth.json
                /node_modules
                /public/build
                /public/hot
                /public/storage
                /storage/*.key
                /storage/pail
                /vendor
                Homestead.json
                Homestead.yaml
                Thumbs.db

    Adicionar arquivos
        git add .

    Commit inicial
        git commit -m "Initial commit - Base Universal Laravel 12 Login"

    Conectar com o repositório do GitHub
        git remote add origin https://github.com/vagnerlemos/laravel12-login

    Enviar para o GitHub (push)
        git branch -M main
        git push -u origin main



    Fluxo Padrão daqui pra frente
        Depois da primeira vez, sempre será:
        git status
        git add .
        git commit -m "Mensagem"
        git push




    CRIAR BRANCH:
    Ver em qual branch você está
git branch

Criar branch de testes
git checkout -b feature/login-tests

Trabalhe normalmente agora

Faça seus testes:

mexa em Blade

mexa em JS

quebre

arrume

teste

Quando quiser salvar:

git add .
git commit -m "Test login loader and password toggle"


Esses commits ficam SÓ nesse branch.







Se tudo der errado → VOLTAR LIMPO

Se você quiser jogar tudo fora:

Opção A — Voltar para main
git checkout main


Pronto.

Você voltou para a versão limpa.

O código quebrado ficou no outro branch.

Opção B — Apagar o branch ruim

Se decidiu que não presta:

git branch -D feature/login-tests


Ele some.

Nada afeta a main.

5️⃣ Se der certo → Levar para produção

Quando ficar bom:

git checkout main
git merge feature/login-tests
git push


A main recebe suas melhorias.






