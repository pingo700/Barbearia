<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('Layout');
    }

    public function sobre()
    {
        return view('Sobre');
    }

    public function produtos()
    {
        return view('Produtos');
    }

    public function login()
    {
        return view('Login');
    }
}
