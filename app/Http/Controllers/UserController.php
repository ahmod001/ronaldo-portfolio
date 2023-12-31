<?php

namespace App\Http\Controllers;

use App\Helper\ResponseHelper;
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
}
