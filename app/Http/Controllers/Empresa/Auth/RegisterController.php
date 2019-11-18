<?php

namespace App\Http\Controllers\Empresa\Auth;

use App\Models\empresa;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/empresa/home';

    public function __construct()
    {
        $this->middleware('guest:empresa');
    }

    public function showRegistrationForm()
    {
        return view('empresa.auth.register');
    }
    protected function guard()
    {
        return Auth::guard('empresa');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:15'],
            'address' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:empresas'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return empresa::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'category' => $data['category'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
