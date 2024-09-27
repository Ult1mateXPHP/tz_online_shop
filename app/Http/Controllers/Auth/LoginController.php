<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Laravel\Prompts\error;

class LoginController extends Controller
{
    /*
     * Display login page.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('auth.login', ['route' => 'Login', 'error' => '']);
    }

    /*
     * Handle account login request
     *
     * @param LoginRequest $request
     *
     * @return \Illuminate\Http\Response
     */
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

    /*
     * Handle response after user authenticated
     *
     * @param Request $request
     * @param Auth $user
     *
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended();
    }
}
