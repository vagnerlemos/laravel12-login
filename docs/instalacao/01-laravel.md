30 MINUTOS PARA INSTALAR


01-no terminal vscode entre na pasta
    cd C:\xampp8212\htdocs

        composer create-project laravel/laravel "base_universal_v4" "10.*"

        code C:\xampp8212\apache\conf\extra\httpd-vhosts.conf

            //no final do arquivo acrescente:
            <VirtualHost *:80>
                ServerName v4-foodstorebrasil.com.br
                ServerAlias www.v4-foodstorebrasil.com.br

                DocumentRoot "C:/xampp8212/htdocs/base_universal_v4/public"

                <Directory "C:/xampp8212/htdocs/base_universal_v4/public">
                    AllowOverride All
                    Require all granted
                </Directory>

                ErrorLog "logs/base_universal_v4_error.log"
                CustomLog "logs/base_universal_v4_access.log" common
            </VirtualHost>


02-no bloco de notas entre como administrador
    abra este arquivo:
    C:\Windows\System32\drivers\etc\hosts
        No final do arquivo, adicione:
        127.0.0.1 v4.foodstorebrasil.com.br
        127.0.0.1 www.v4.foodstorebrasil.com.br



03-  cd C:\xampp8212\htdocs\base_universal_v4

04 - code .

05-Ajustar o .env do Laravel
    APP_NAME="Base v4"  (atenção coloque entre aspas "" tudo que tiver espaço)
    APP_URL=http://v4.foodstorebrasil.com.br
    DB_DATABASE=kaiser_core_v4

06-limpar cache:
    php artisan optimize:clear  
        
07-Reiniciar o Apache (obrigatório)  

08- http://localhost/phpmyadmin/
    NOVO
        kaiser_core_v5

        php artisan migrate 
        php artisan db:seed




09- EXPLOORE DO WINDOWS
    C:\xampp8212\htdocs
        Copie a pasta doc para o novo projeto

10- config/app.php
    'locale' => 'pt_BR',
    'fallback_locale' => 'pt_BR',
    'timezone' => 'America/Sao_Paulo',
    'faker_locale' => 'pt_BR',
    'name' => env('APP_NAME', 'System'),
     APP_URL=https://sistema.foodstore.com.br

     Em AppServiceProvider.php → boot():
        use Carbon\Carbon;
        Carbon::setLocale('pt_BR');
        setlocale(LC_TIME, 'pt_BR', 'pt_BR@currency=BRL', 'Portuguese_Brazil');



10.01-Instalar tradução PT-BR do Laravel (recomendado)
        composer require laravel-lang/lang --dev
        Publicar traduções:
        php artisan lang:add pt_BR

        Ajustar Carbon (datas em PT-BR)

            Crie ou edite app/Providers/AppServiceProvider.php:

            use Carbon\Carbon;

            public function boot(): void
            {
                Carbon::setLocale(config('app.locale'));
            }








11- Publicar traduções do Filament
    php artisan vendor:publish --tag=filament-translations   

12- Criar arquivo de tradução do Filament
        Crie:
        resources/lang/pt_BR/filament.php
            Conteúdo mínimo funcional
            <?php
            return [
                'navigation' => [
                    'users' => 'Usuários',
                ],
                'buttons' => [
                    'create' => 'Novo usuário',
                    'edit' => 'Editar',
                    'save' => 'Salvar',
                    'cancel' => 'Cancelar',
                ],
                'table' => [
                    'pagination' => [
                        'label' => 'Por página',
                        'overview' => 'Mostrando :first a :last de :total resultados',
                    ],
                    'empty' => 'Nenhum registro encontrado',
                ],
            ];

13 - UserResource.php
    Adicione:
    protected static ?string $modelLabel = 'Usuário';
    protected static ?string $pluralModelLabel = 'Usuários'; 

14 - Traduzir botão "New user"
    No ListUsers.php:
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('Novo usuário'),
        ];
    }
