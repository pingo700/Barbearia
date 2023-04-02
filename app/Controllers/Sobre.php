<?php

namespace App\Controllers;
use App\Models\SobreModel;
use CodeIgniter\Controller;

class Sobre extends BaseController
{
    public function index()
    {
        $sobreModel = new SobreModel();
        $data['sobre'] = $sobreModel->orderBy('id')->findAll();
        return view('Sobre',$data);
    }

}
