<?php

namespace App\Http\Controllers\UserCompleateSettings\Repository;
use App\Models\UserSetting;
use Illuminate\Support\Facades\Log;

class UserCompleateSettingsRepository
{
    public function createOrUpdate(array $data): bool
    {
        Log::info($data);
        $setting = UserSetting::updateOrCreate(
            ['user_id' => $data['user_id']],
            [
                'avatar' => $data['avatar'],
                'gender' => $data['gender'],
                'bio' => $data['bio'],
                'interests' => $data['interests'],
                'status' => 1,
            ]
        );

        return $setting ? true : false;
    }
}
