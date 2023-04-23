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

    public function CadastrarProduto(){
        $produtoModel  = new ProdutoModel();
        $data = [
            'nome'       => $this->request->getVar('Nome'),
            'valor'      => $this->request->getVar('Valor')
        ];
        return $produtoModel->insert($data);
    }

    public function CadastroProdutoTable()
    {
        $produtoModel = new ProdutoModel();
        return  $this->GeraTable(__FUNCTION__ ,['N°','Nome','Valor'],$produtoModel->orderBy('id')->findAll());
    }

    private function GeraTable($FUNCTION_NAME,$CABEÇALHO,$DATA){
        $table = new \CodeIgniter\View\Table();
        $table->setTemplate(['table_open' => '<table id="'.$FUNCTION_NAME.'" class="table table-bordered  table-sm table-striped bg-light">','heading_cell_start' => '<th class="text-center" style="white-space: nowrap">','row_start'  => '<tr class="text-center">']);
        $table->setHeading($CABEÇALHO);  
        return $table->generate($DATA);
    }




}
