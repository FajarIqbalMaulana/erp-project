<?php

namespace App\Http\Controllers\main_page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainPageLanding extends Controller
{
    public function index()
    {
        $pageConfigs = ['myLayout' => 'front'];
        return view('content.main-page.main-page-landing', ['pageConfigs' => $pageConfigs]);
    }
}
