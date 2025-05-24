<?php

namespace App\Http\Controllers\UserCompleateSettings;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserCompleateSettings\Services\UserCompleateSettingsService;

class UserCompleateSettingsController extends Controller
{
    protected $UserCompleateSettingsService;

    public function __construct(UserCompleateSettingsService $UserCompleateSettingsService)
    {
        $this->UserCompleateSettingsService = $UserCompleateSettingsService;
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

        $result = $this->UserCompleateSettingsService->saveSettings($data);

        return response()->json(['success' => $result]);
    }
}
