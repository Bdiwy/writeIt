<?php

namespace App\Http\Controllers\UserSettings\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use App\Http\Controllers\UserSettings\Repository\UserSettingRepository;

class UserSettingService
{
    protected $userSettingRepo;

    public function __construct(UserSettingRepository $userSettingRepo)
    {
        $this->userSettingRepo = $userSettingRepo;
    }

    public function saveSettings(array $data): bool
    {
        return $this->userSettingRepo->createOrUpdate($data);
    }

    public function handleImage(Request $request): ?string
    {
        $image      = $request->file('avatar');
        if (!$image) {
            return null;
        }
        $imageName  = Str::random(20) . '.'.$image->getClientOriginalExtension();
        $imagePath  = 'avatars/' . $imageName;

        Storage::disk('public')->putFileAs('avatars',$image, $imageName);

        return $imagePath;
    }

    public function updateSettings(array $data): bool
    {
        $filteredData = array_filter($data, function ($value) {
            return !is_null($value);
        });

        return $this->userSettingRepo->updateSettings($filteredData);
    }
}
