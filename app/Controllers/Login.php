<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class Login extends BaseController
{
    public function index()
    {
        return view('Login');
    }

    public function Login(){
        $session = session();
        $userModel = new UsuarioModel();
        $data = $userModel->where('email', $this->request->getVar('EMAIL'))->first();
        if($data){
            if($this->request->getVar('SENHA') == $data['senha']){
                $ses_data = [
                    'ID' => $data['id'],
                    'NOME' => $data['nome'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to(site_url('/'));
            }else{
                return 'Senha ou nome incorreto.';
            }
        }else{
            return 'Usuário não existe.';
        }
    }
}
