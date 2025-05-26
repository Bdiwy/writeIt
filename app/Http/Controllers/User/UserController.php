<?php
namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showCompleteProfile()
    {
        return View("pages.compleate-profile.index");
    }

    public function showSettingsProfile()
    {
        return view("pages.settings.index");
    }

    public function showProfile()
    {
        return view("pages.profile.index");
    }
}
