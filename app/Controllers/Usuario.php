<?php

namespace App\Controllers;
use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class Usuario extends BaseController
{
    public function TableUsuario()
    {
        $usuarioModel = new UsuarioModel();
        foreach($usuarioModel->orderBy('id')->findAll() as $usuario){
            $result[] = [
                $usuario['id'],
                $usuario['nome'],
                $usuario['categoria'],
                $usuario['email'],
                $usuario['senha']
            ];
        }

        $usuarios = [
            'data' => $result
        ];

        return json_encode($usuarios);
    }

    public function CadastrarUsuario(){
        $usuarioModel = new UsuarioModel();
        $data = [
            'nome'       => $this->request->getVar('Nome'),
            'categoria'  => $this->request->getVar('Categoria'),
            'email'      => $this->request->getVar('Email'),
            'senha'      => $this->request->getVar('Senha')
        ];
        return $usuarioModel->insert($data);
    }

    private function GeraTable($FUNCTION_NAME,$CABEÇALHO,$DATA){
        $table = new \CodeIgniter\View\Table();
        //$table->setTemplate(['table_open' => '<table id="'.$FUNCTION_NAME.'" class="table table-bordered  table-sm table-striped bg-light">','heading_cell_start' => '<th class="text-center" style="white-space: nowrap">','row_start'  => '<tr class="text-center">']);
        $table->setTemplate(['table_open' => '<table id="'.$FUNCTION_NAME.'" class="table table-bordered  table-sm table-striped bg-light">']);
        $table->setHeading($CABEÇALHO);  
        return $table->generate($DATA);
    }

}
