<?php

namespace App\Http\Controllers\UserSettings\Repository;
use App\Models\User;
use App\Models\UserSetting;
use Illuminate\Support\Facades\Log;

class UserSettingRepository
{
    public function createOrUpdate(array $data): bool
    {
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

    public function updateSettings (array $data):bool
    {
        $user = User::findOrFail($data['user_id']);

        $user->update([
            'name' => $data['name'],
            'email' => $data['email'],
        ]);

        $userSetting = $user->settings; 
        if ($userSetting) {
            $userSetting->update([
                'avatar' => $data['avatar'],
            ]);
        }
        return true;
    }
}
