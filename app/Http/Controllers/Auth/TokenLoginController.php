<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use OnlineShop\Domain\Entity\UserTokenEntity;

class LoginController extends Controller
{
    public function index() {
        return view('auth.login', ['error' => '']);
    }

    public function enter(Request $request)
    {
        $token = Request::input('token');
        $result = $this->validate($token);
        if(is_object($result)) {
            Auth::login($result);
            return redirect('/');
        } else {
            return view('auth.error', ['error' => $result]);
        }
    }

    private function validate($token) : User|string
    {
        $userId = UserTokenEntity::query()->where('token', '=', $token)->get('user')->first();
        if(isset($userId->user)) {
            $user = User::query()->find($userId->user);
            return $user;
        } else {
            return "Token not valid";
        }
    }
}
