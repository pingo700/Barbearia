<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class Admin extends BaseController
{
    public function index()
    {
        return view('Admin/Teste');
    }

}
