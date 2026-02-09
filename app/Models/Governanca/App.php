<?php

namespace App\Models\Governanca;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class App extends Model
{
    protected $table = 'gov_apps';

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            'gov_app_user',
            'app_id',
            'user_id'
        );
    }
}
