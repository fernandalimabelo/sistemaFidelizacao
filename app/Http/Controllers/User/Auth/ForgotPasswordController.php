<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;

    public function __construct()
    {
        $this->middleware('guest:user');
    }

    public function showLinkRequestForm()
    {
        return view('user.auth.passwords.email');
    }
    public function broker()
    {
        return Password::broker('users');
    }
}
