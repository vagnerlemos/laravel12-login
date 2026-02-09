<?php

namespace App\Models\Governanca;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActivityLog extends Model
{
    protected $table = 'gov_activity_logs';

    protected $casts = [
        'old_values' => 'array',
        'new_values' => 'array',
        'context' => 'array',
    ];

    public function actor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'actor_id');
    }
}
