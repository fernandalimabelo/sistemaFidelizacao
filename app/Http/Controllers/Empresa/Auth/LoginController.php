<?php

namespace App\Http\Controllers\Empresa\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = 'empresa/home';

    public function __construct()
    {
        // $this->middleware('guest:empresa');
    }

    public function showLoginForm()
    {
        return view('empresa.auth.login');
    }
    public function logout(Request $request)
    {   
        $this->guard()->logout();
        return redirect('/empresa/login');
    }
    protected function guard()
    {
        return Auth::guard('empresa');
    }
}
