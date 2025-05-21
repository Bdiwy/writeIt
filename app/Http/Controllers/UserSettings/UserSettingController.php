<?php

namespace App\Http\Controllers\UserSettings;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserSettings\Services\UserSettingService;

class UserSettingController extends Controller
{
    protected $userSettingService;

    public function __construct(UserSettingService $userSettingService)
    {
        $this->userSettingService = $userSettingService;
    }

    public function completeProfile(Request $request)
    {
        Log::info("asdsadas");
        $user = auth()->user();
        
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $data = [
            'user_id' => $user->id,
            'avatar' => $request->input('filename'),
            'gender' => $request->input('personalData.gender'),
            'bio' => $request->input('personalData.bio'),
            'interests' => $request->input('selectedInterests'),
        ];

        $result = $this->userSettingService->saveSettings($data);

        return response()->json(['success' => $result]);
    }
}
