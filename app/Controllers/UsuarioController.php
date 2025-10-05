<?php

namespace App\Controllers;
use App\Models\Usuario;

class UsuarioController extends BaseController
{
    public function login(){

        $session=session();

        $usuario=new Usuario();

        $nombreusuario=$this->request->getPost("nomusuario");
        $claveacceso=$this->request->getPost("claveacceso");

        $data=$usuario->getUser($nombreusuario);

        if(!$data){
            $session->setFlashdata("error_nomuser","No existe el usuario ".$nombreusuario);
            return redirect()->to(base_url());
        }

        $claveEncriptada=$data["claveacceso"];
        
        if(!password_verify($claveacceso,$claveEncriptada)){
            $session->setFlashdata("error_password","clave incorrecta") ;
            return redirect()->to(base_url());
        }

        return redirect()->to(base_url('/login/registrar'));
    }
}