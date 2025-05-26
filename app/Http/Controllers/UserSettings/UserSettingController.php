<?php

namespace App\Http\Controllers\UserSettings;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserSettings\Services\UserSettingService;
use App\Http\Controllers\UserSettings\Requests\UpdateSettingRequest;

class UserSettingController extends Controller
{
    protected $userSettingService;

    public function __construct(UserSettingService $userSettingService)
    {
        $this->userSettingService = $userSettingService;
    }

    public function completeProfile(Request $request)
    {
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

    public function updateSettings(UpdateSettingRequest $request)
    {
        $user = auth()->user();
        
        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        
        if ($request->hasFile('avatar')) {
            $avatarPath = $this->userSettingService->handleImage($request);
        }

        $data = [
            'user_id' => $user->id,
            'name' => $request->input('name') ?? Null,
            'email' => $request->input('email') ?? Null,
            'password' => $request->input('password') ?? Null ,
            'avatar' => $avatarPath ?? Null,
        ];
        $result = $this->userSettingService->updateSettings($data);
        return $result ; 
    }

}
