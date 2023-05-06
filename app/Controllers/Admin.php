<?php

namespace App\Controllers;
use App\Models\UsuarioModel;
use App\Controllers\Produtos;
use App\Controllers\Usuario;

class Admin extends BaseController
{
    public function index()
    {
        return view('Admin/Home');
    }

    public function CadastroCliente()
    {
        return view('Admin/CadastroCliente');
    }

    public function CadastroProdutoPage()
    {
        $produtos = new Produtos();
        return view('Admin/CadastroProduto',['produtos' => $produtos->CadastroProdutoTable()]);
    }

    public function CadastroUsuario()
    {
        $usuario = new Usuario();
        return view('Admin/CadastroUsuario');
    }

}
