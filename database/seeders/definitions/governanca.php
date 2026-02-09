<?php

return [

    'app' => [
        'code'      => 'governanca',
        'label'     => 'Governança',
        'is_active' => true,
    ],

    'roles' => [
        'admin'   => 'Administrador',
        'manager' => 'Gerente',
        'viewer'  => 'Visualizador',
    ],

    'permissions' => [
        ['users', 'users.view',   'Visualizar usuários'],
        ['users', 'users.create', 'Criar usuários'],
        ['users', 'users.update', 'Editar usuários'],

        ['roles', 'roles.view',   'Visualizar papéis'],
        ['roles', 'roles.create', 'Criar papéis'],
        ['roles', 'roles.update', 'Editar papéis'],
        ['roles', 'roles.delete', 'Excluir papéis'],

        ['permissions', 'permissions.view',   'Visualizar permissões'],
        ['permissions', 'permissions.update', 'Editar permissões'],

        ['apps', 'apps.view',   'Visualizar aplicativos'],
        ['apps', 'apps.update', 'Editar aplicativos'],

        ['logs', 'logs.view', 'Visualizar logs'],
    ],

    'grant_all_permissions_to' => ['admin'],

    'granularities' => [
        [
            'code'      => 'users.field.password.hide',
            'label'     => 'Ocultar campo senha do usuário',
            'is_denied' => true,
        ],
    ],

];
