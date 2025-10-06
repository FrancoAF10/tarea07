<?php

namespace App\Controllers;

use App\Models\Usuario;

class FormularioController extends BaseController
{
    public function index()
    {
        $session=session();

        $data['usuario'] = [
            'nombres'    => $session->get('nombres'),
            'apellidos'  => $session->get('apellidos'),
            'nomusuario' => $session->get('nomusuario'),
            'nivelacceso' => $session->get('nivelacceso'),
            'avatar'     => $session->get('avatar')
        ];
        return view('login/inicio',$data);
    }
    public function formulario(){
        return view('login/registrar');
    }
    public function registrar(){
        $usuario= new Usuario();
        
        $validacion = $this->validate([
        'nomusuario'  => 'required|min_length[3]',
        'avatar'  => [
            'uploaded[avatar]',
            'mime_in[avatar,image/jpg,image/jpeg,image/png]',
            'max_size[avatar,2048]'
        ]
        ]);

        if (!$validacion){
            $session = session();
            $session->setFlashdata('mensaje', 'Revise la información');

            return redirect()->back()->withInput();
        }

        $nombres = $this->request->getVar('nombres'); 
        $apellidos = $this->request->getVar('apellidos'); 
        $nomusuario = $this->request->getVar('nomusuario'); 
        $nivelacceso = $this->request->getVar('nivelacceso'); 
        $claveacceso = $this->request->getVar('claveacceso'); 

        if ($imagen = $this->request->getFile('avatar')){
        $nuevoNombre = $imagen->getRandomName();
        $imagen->move('../public/images/users', $nuevoNombre);

        $registro = [
            'nombres'    => $nombres,
            'apellidos'   =>$apellidos,
            'nomusuario'   =>$nomusuario,
            'nivelacceso'   =>$nivelacceso,
            'claveacceso'   =>password_hash($claveacceso,PASSWORD_DEFAULT),
            'avatar'    => 'images/users/'.$nuevoNombre
        ];

        $usuario->insert($registro);
        }

        return $this->response->redirect(base_url('login/inicio'));

    }
}
  