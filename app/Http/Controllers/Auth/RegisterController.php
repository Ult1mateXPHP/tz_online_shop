<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
     * Display register page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.register', ['error' => '']);
    }

    /*
     * Handle account registration request
     *
     * @param RegisterRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $user = User::query()->create($this->validate($request));
        auth()->login($user);
        return redirect('/')->with('success', "Account successfully registered.");
    }

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
