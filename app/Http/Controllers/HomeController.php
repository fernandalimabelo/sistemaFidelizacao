<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('home');
    }

    public function indexEmpresa()
    {
        return view('empresa.homeEmpresa');
    }

    public function indexUser()
    {
        return view('user.homeUser');
    }

    public function showPrint()
    {
        return view('user.printUser');
    }
}
