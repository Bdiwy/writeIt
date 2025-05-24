<?php

namespace App\Http\Controllers\UserSettings\Services;

use Illuminate\Support\Facades\Log;
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

    public function updateSettings(array $data): bool
    {
        return $this->userSettingRepo->updateSettings($data);
    }
}
