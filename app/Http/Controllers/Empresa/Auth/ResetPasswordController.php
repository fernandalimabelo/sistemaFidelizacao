<?php

namespace App\Http\Controllers\Empresa\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;

class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    protected $redirectTo = '/empresa';

    public function __construct()
    {
        $this->middleware('guest:empresa');
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view('empresa.auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
    public function broker()
    {
        return Password::broker('empresas');
    }
    protected function guard()
    {
        return Auth::guard('empresa');
    }
}
