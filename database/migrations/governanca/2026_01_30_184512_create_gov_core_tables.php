<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        /**
         * GOV_USERS — Identidade Global
         */
        Schema::create('gov_users', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('is_active')->default(true);

            $table->rememberToken();
            $table->timestamps();
        });

        /**
         * GOV_APPS — Registro Multi-App
         */
        Schema::create('gov_apps', function (Blueprint $table) {
            $table->id();

            $table->string('code')->unique();     // system, vendas, site...
            $table->string('label');              // Nome humano PT-BR
            $table->boolean('is_active')->default(true);

            $table->timestamps();
        });

        /**
         * GOV_APP_USER — Barreira Primária de Acesso
         */
        Schema::create('gov_app_user', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained('gov_users')
                ->cascadeOnDelete();

            $table->foreignId('app_id')
                ->constrained('gov_apps')
                ->cascadeOnDelete();

            $table->timestamps();

            $table->unique(['user_id', 'app_id'], 'uk_gov_app_user_user_app');
        });

        /**
         * GOV_ROLES — Papéis por App
         */
        Schema::create('gov_roles', function (Blueprint $table) {
            $table->id();

            $table->foreignId('app_id')
                ->constrained('gov_apps')
                ->cascadeOnDelete();

            $table->string('code');   // chave técnica
            $table->string('label');  // nome humano PT-BR

            $table->timestamps();

            $table->unique(['app_id', 'code'], 'uk_gov_roles_app_code');
        });

        /**
         * GOV_PERMISSIONS — Permissões por App + Recurso
         */
        Schema::create('gov_permissions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('app_id')
                ->constrained('gov_apps')
                ->cascadeOnDelete();

            $table->string('resource');                  // users, roles, clients
            $table->string('code');                      // users.create
            $table->string('label');                     // PT-BR (Criar usuários)

            $table->string('resource_group_code')->nullable();
            $table->string('resource_group_label')->nullable(); // PT-BR

            $table->timestamps();

            $table->unique(['app_id', 'code'], 'uk_gov_permissions_app_code');
        });

        /**
         * GOV_ROLE_PERMISSION — Pivot Role ↔ Permission
         */
        Schema::create('gov_role_permission', function (Blueprint $table) {
            $table->id();

            $table->foreignId('role_id')
                ->constrained('gov_roles')
                ->cascadeOnDelete();

            $table->foreignId('permission_id')
                ->constrained('gov_permissions')
                ->cascadeOnDelete();

            $table->timestamps();

            $table->unique(['role_id', 'permission_id'], 'uk_gov_role_permission_pair');
        });

        /**
         * GOV_GRANULARITIES — Controle Fino (Deny > Allow)
         */
        Schema::create('gov_granularities', function (Blueprint $table) {
            $table->id();

            $table->foreignId('app_id')
                ->constrained('gov_apps')
                ->cascadeOnDelete();

            $table->string('code');   // ex: users.field.cpf.hide
            $table->string('label');  // PT-BR (Ocultar CPF)
            $table->boolean('is_denied')->default(false);

            $table->timestamps();

            $table->unique(['app_id', 'code'], 'uk_gov_granularities_app_code');
        });

        /**
         * GOV_ACTIVITY_LOGS — Auditoria Soberana
         */
        Schema::create('gov_activity_logs', function (Blueprint $table) {
            $table->id();

            $table->foreignId('actor_id')
                ->nullable()
                ->constrained('gov_users')
                ->nullOnDelete();

            $table->string('app');          // system, vendas, site
            $table->string('action');       // gov.user.created
            $table->string('resource');     // users, roles
            $table->unsignedBigInteger('resource_id')->nullable();

            $table->json('old_values')->nullable();
            $table->json('new_values')->nullable();
            $table->json('context')->nullable();

            $table->string('ip_address')->nullable();
            $table->text('user_agent')->nullable();
            $table->string('url')->nullable();
            $table->string('method', 10)->nullable();

            $table->timestamp('created_at')->useCurrent();

            $table->index('action', 'idx_gov_activity_logs_action');
            $table->index('resource', 'idx_gov_activity_logs_resource');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gov_activity_logs');
        Schema::dropIfExists('gov_granularities');
        Schema::dropIfExists('gov_role_permission');
        Schema::dropIfExists('gov_permissions');
        Schema::dropIfExists('gov_roles');
        Schema::dropIfExists('gov_app_user');
        Schema::dropIfExists('gov_apps');
        Schema::dropIfExists('gov_users');
    }
};
