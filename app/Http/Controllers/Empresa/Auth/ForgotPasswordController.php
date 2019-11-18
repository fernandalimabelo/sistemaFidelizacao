<?php

namespace App\Http\Controllers\Empresa\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;
    
    public function __construct()
    {
        $this->middleware('guest:empresa');
    }

    public function showLinkRequestForm()
    {
        return view('empresa.auth.passwords.email');
    }
    public function broker()
    {
        return Password::broker('empresas');
    }
}
