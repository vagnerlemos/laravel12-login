<?php

namespace App\Services\Governanca\UI;

use App\Models\Governanca\UserPreference;

class VisualProfileService
{
    public static function resolve(int $userId, int $appId): string
    {
        return UserPreference::where('user_id', $userId)
            ->where('app_id', $appId)
            ->value('visual_profile')
            ?? 'light';
    }
}
