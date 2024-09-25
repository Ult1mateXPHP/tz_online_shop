<?php

namespace App\Http\Controllers\Overview;

use App\Http\Controllers\Controller;

class MainPageController extends Controller
{
    public function index()
    {
        return view('overview.main');
    }
}
