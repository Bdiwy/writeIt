<?php

namespace App\Http\Controllers\UserSettings\Repository;
use App\Models\UserSetting;
use Illuminate\Support\Facades\Log;

class UserSettingRepository
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
                'status' => 1, // default active status
            ]
        );

        return $setting ? true : false;
    }
}
