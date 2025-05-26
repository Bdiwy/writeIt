<?php
namespace App\Http\Controllers\Explore;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ExploreController extends Controller
{
    public function showExplore()
    {
        return View("pages.explore.index");
    }
}
