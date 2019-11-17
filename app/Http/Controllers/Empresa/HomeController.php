<?php

namespace App\Http\Controllers\Empresa\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:empresa');
    }
    public function index()
    {
        // return view('empresa.homeEmpresa');
        return 2;
    }
}
