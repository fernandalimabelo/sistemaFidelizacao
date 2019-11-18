<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest:user');
    }

    public function showLoginForm()
    {
        return view('user.auth.login');
    }
    public function logout(Request $request)
    {
        $this->guard()->logout();
        return redirect('/user/login');
    }
    protected function guard()
    {
        return Auth::guard('user');
    }
}
