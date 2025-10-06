<?php

namespace App\Models;
use CodeIgniter\Model;

class Usuario extends Model{
protected $table = "usuario";  

protected $createdField='create_at';
protected $updatedField='update_at';
protected $allowedFields = ['nombres', 'apellidos', 'nomusuario', 'claveacceso', 'nivelacceso', 'avatar'];

/**
 * retorna el registro del nombre del usuario indicado
 * @param mixed $nomususario
 * @return void
 */

  public function getUser($nomusuario=''): array|object|null{
    $usuario=$this->where('nomusuario',$nomusuario)->first();
    return $usuario;
  }
}
