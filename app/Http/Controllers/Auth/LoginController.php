<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login', ['route' => 'Login', 'error' => '']);
    }

    public function login(Request $request)
    {
        $credentials = [
            'name' => $request->input('username'),
            'password' => $request->input('password')
        ];

        if(!Auth::validate($credentials)) {
            return redirect()->to('login');
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended();
    }
}
