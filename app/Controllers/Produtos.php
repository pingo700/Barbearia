<?php

namespace App\Controllers;
use App\Models\ProdutoModel;
use CodeIgniter\Controller;

class Produtos extends BaseController
{
    public function index()
    {
        $produtoModel = new ProdutoModel();
        $data['produtos'] = $produtoModel->orderBy('id')->findAll();
        return view('Produtos',$data);
    }


}
