<?php

namespace App\Http\Controllers;

use App\Helper\ResponseHelper;
use App\Models\Award;
use App\Models\Education;
use App\Models\Experience;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function getHeroData(Request $request)
    {
        $data = User::select(['name', 'profession'])->first();
        return ResponseHelper::success($data);
    }

    function getAboutData(Request $request)
    {
        return ResponseHelper::success(User::first());
    }

    function getEducationList(Request $request)
    {
        $data = Education::latest()->get();
        return ResponseHelper::success($data);
    }

    function getExperienceList(Request $request)
    {
        $data = Experience::latest()->get();
        return ResponseHelper::success($data);
    }

    function getAwardList(Request $request)
    {
        $data = Award::latest()->get();
        return ResponseHelper::success($data);
    }
}
