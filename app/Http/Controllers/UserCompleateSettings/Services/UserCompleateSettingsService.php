<?php

namespace App\Http\Controllers\UserCompleateSettings\Services;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\UserCompleateSettings\Repository\UserSettingRepository;

class UserCompleateSettingsService
{
    protected $UserCompleateSettingsRepo;

    public function __construct(UserCompleateSettingsRepository $UserCompleateSettingsRepo)
    {
        $this->UserCompleateSettingsRepo = $UserCompleateSettingsRepo;
    }

    public function saveSettings(array $data): bool
    {
        Log::alert("message");
        return $this->UserCompleateSettingsRepo->createOrUpdate($data);
    }
}
