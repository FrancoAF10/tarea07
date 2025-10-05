<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Susuarios extends Seeder
{
    public function run()
    {
        $data=[
            [
                "apellidos"=> "Anton Felix",
                "nombres"=> "Gian Franco",
                "nomusuario"=> "afgian",
                "claveacceso"=> password_hash("admin789*", PASSWORD_DEFAULT),
                "nivelacceso"=> "ADMIN",
                "avatar"=>null,
                "create_at"=> date("Y-m-d H:i:s"),
                "update_at"=> null
            ]
        ];

        //insertar en la tabla
        $this->db->table("usuario")->insertBatch($data);
    }
}
