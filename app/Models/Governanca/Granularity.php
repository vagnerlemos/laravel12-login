<?php

namespace App\Models\Governanca;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Granularity extends Model
{
    protected $table = 'gov_granularities';

    protected $casts = [
        'is_denied' => 'boolean',
    ];

    public function app(): BelongsTo
    {
        return $this->belongsTo(App::class, 'app_id');
    }
}
