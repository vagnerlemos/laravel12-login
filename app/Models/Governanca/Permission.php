<?php

namespace App\Models\Governanca;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Permission extends Model
{
    protected $table = 'gov_permissions';

    public function app(): BelongsTo
    {
        return $this->belongsTo(App::class, 'app_id');
    }
}
