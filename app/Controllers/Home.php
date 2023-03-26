<?php

namespace App\Controllers;

$db = \Config\Database::connect();
$db = db_connect();
$dados = $db->query('SELECT id FROM produto;');



var_dump($dados);
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
