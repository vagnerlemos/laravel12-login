<?php

namespace App\Models\Governanca;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    protected $table = 'gov_roles';

    public function app(): BelongsTo
    {
        return $this->belongsTo(App::class, 'app_id');
    }

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(
            Permission::class,
            'gov_permission_role',
            'role_id',
            'permission_id'
        );
    }
}
