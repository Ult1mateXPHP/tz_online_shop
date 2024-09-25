<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Domain\Entity\UserTokenEntity;

class LoginController extends Controller
{
    public function index() {
        return view('auth.main', ['error' => '0']);
    }

    public function enter(Request $request)
    {
        if($this->validate(Request::input('token'))) {
            return redirect('/');
        } else {
            return view('auth.error', ['error' => 'Token not valid']);
        }
    }

    private function validate($token) : bool
    {
        $userToken = UserTokenEntity::query()->where('token', '=', $token);
        if ($userToken->count() == 1) {
            return true;
        }
        return false;
    }
}
