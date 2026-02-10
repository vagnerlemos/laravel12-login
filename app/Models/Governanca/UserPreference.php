<?php

namespace App\Models\Governanca;

use Illuminate\Database\Eloquent\Model;

class UserPreference extends Model
{
    protected $table = 'gov_user_preferences';

    protected $fillable = [
        'user_id',
        'app_id',
        'visual_profile',
    ];
}
