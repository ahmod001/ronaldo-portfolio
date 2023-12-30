<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function landingPage()
    {
        return view('Pages.landing-page');
    }
}
