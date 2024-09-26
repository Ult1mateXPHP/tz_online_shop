<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function index()
    {
        if(\auth()->check()) {
            Auth::logout();
        }
        return redirect('/login');
    }
}
