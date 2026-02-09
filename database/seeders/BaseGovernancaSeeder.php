<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BaseGovernancaSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | 1. Usuário mestre (root / start)
        |--------------------------------------------------------------------------
        */
        DB::table('gov_users')->updateOrInsert(
            ['email' => 'vagner.lemos@outlook.com'],
            [
                'name'              => 'Administrador Inicial',
                'password'          => Hash::make('123456'),
                'email_verified_at' => now(),
                'is_active'         => true,
                'created_at'        => now(),
                'updated_at'        => now(),
            ]
        );

        $user = DB::table('gov_users')
            ->where('email', 'vagner.lemos@outlook.com')
            ->first();

        /*
        |--------------------------------------------------------------------------
        | 2. Processar todos os apps declarados
        |--------------------------------------------------------------------------
        */
        foreach (glob(database_path('seeders/definitions/*.php')) as $file) {

            $def = require $file;

            /*
            |--------------------------------------------------------------------------
            | APP
            |--------------------------------------------------------------------------
            */
            DB::table('gov_apps')->updateOrInsert(
                ['code' => $def['app']['code']],
                [
                    'label'      => $def['app']['label'],
                    'is_active'  => $def['app']['is_active'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );

            $app = DB::table('gov_apps')
                ->where('code', $def['app']['code'])
                ->first();

            /*
            |--------------------------------------------------------------------------
            | Vínculo usuário ↔ app
            |--------------------------------------------------------------------------
            */
            DB::table('gov_app_user')->updateOrInsert(
                [
                    'user_id' => $user->id,
                    'app_id'  => $app->id,
                ],
                [
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );

            /*
            |--------------------------------------------------------------------------
            | ROLES
            |--------------------------------------------------------------------------
            */
            $rolesMap = [];

            foreach ($def['roles'] as $code => $label) {
                DB::table('gov_roles')->updateOrInsert(
                    [
                        'app_id' => $app->id,
                        'code'   => $code,
                    ],
                    [
                        'label'      => $label,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                );

                $rolesMap[$code] = DB::table('gov_roles')
                    ->where('app_id', $app->id)
                    ->where('code', $code)
                    ->first();
            }

            /*
            |--------------------------------------------------------------------------
            | PERMISSIONS
            |--------------------------------------------------------------------------
            */
            $permissionsMap = [];

            foreach ($def['permissions'] as [$resource, $code, $label]) {
                DB::table('gov_permissions')->updateOrInsert(
                    [
                        'app_id' => $app->id,
                        'code'   => $code,
                    ],
                    [
                        'resource'             => $resource,
                        'label'                => $label,
                        'resource_group_code'  => $resource,
                        'resource_group_label' => ucfirst($resource),
                        'created_at'           => now(),
                        'updated_at'           => now(),
                    ]
                );

                $permissionsMap[$code] = DB::table('gov_permissions')
                    ->where('app_id', $app->id)
                    ->where('code', $code)
                    ->first();
            }

            /*
            |--------------------------------------------------------------------------
            | ROLE ↔ PERMISSION (grant total)
            |--------------------------------------------------------------------------
            */
            foreach ($def['grant_all_permissions_to'] as $roleCode) {
                if (!isset($rolesMap[$roleCode])) {
                    continue;
                }

                foreach ($permissionsMap as $permission) {
                    DB::table('gov_role_permission')->updateOrInsert(
                        [
                            'role_id'       => $rolesMap[$roleCode]->id,
                            'permission_id' => $permission->id,
                        ],
                        [
                            'created_at' => now(),
                            'updated_at' => now(),
                        ]
                    );
                }
            }

            /*
            |--------------------------------------------------------------------------
            | GRANULARITIES
            |--------------------------------------------------------------------------
            */
            foreach ($def['granularities'] as $granularity) {
                DB::table('gov_granularities')->updateOrInsert(
                    [
                        'app_id' => $app->id,
                        'code'   => $granularity['code'],
                    ],
                    [
                        'label'      => $granularity['label'],
                        'is_denied'  => $granularity['is_denied'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                );
            }
        }
    }
}
