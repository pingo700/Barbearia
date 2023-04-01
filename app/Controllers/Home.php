<?php

namespace App\Controllers;

$db = \Config\Database::connect();
$db = db_connect();
$dados = $db->simpleQuery('SELECT id,nome FROM produto');
if ($db->simpleQuery('SELECT id,nome FROM produto')) {
foreach($dados as $row)
{
     echo "Id é ".$row['id']."<br>";
     echo "Nome é ".$row['nome']."<br>";
}
} else {
    echo 'Falhou !';
}

die();
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
