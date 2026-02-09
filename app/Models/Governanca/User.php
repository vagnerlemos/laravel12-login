<?php

namespace App\Models\Governanca;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements CanResetPassword
{
    use Notifiable;

    protected $table = 'gov_users';

    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_active'         => 'boolean',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Apps aos quais o usuário pertence
     */
    public function apps(): BelongsToMany
    {
        return $this->belongsToMany(
            App::class,
            'gov_app_user',
            'user_id',
            'app_id'
        );
    }

    /**
     * Roles atribuídos ao usuário
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(
            Role::class,
            'gov_role_user',
            'user_id',
            'role_id'
        );
    }

    /**
     * Logs de atividade (governança)
     */
    public function activityLogs(): HasMany
    {
        return $this->hasMany(ActivityLog::class, 'actor_id');
    }
}
