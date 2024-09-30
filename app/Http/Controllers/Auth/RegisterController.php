<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * [GET]
     * Рендер
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function index()
    {
        return view('auth.register', ['error' => '']);
    }

    /**
     * [POST]
     * Регистрация
     * @param Request $request
     * @return \Illuminate\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function register(Request $request)
    {
        $user = User::query()->create($this->validate($request));
        auth()->login($user);
        return redirect('/')->with('success', "Account successfully registered.");
    }

    /**
     * Валидация
     * @param Request $request
     * @return array
     */
    private function validate(Request $request) : array {
        $credentials = [];
        $user = $request->input('name');
        $password = $request->input('password');
        if(!empty($user)) {
            $credentials['name'] = $user;
        } else {
            redirect('/resgister');
        }
        if(!empty($password)) {
            $credentials['password'] = $password;
        } else {
            redirect('/resgister');
        }
        return $credentials;
    }
}
