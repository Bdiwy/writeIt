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
        $userSetting = User::findOrfail($data['user_id']);
        if ($userSetting) {
            $userSetting->update([
                "name"=>$data['name'],
                "email"=>$data['email'],
            ]);
        }
        return $userSetting ? true : false;
    }
}
