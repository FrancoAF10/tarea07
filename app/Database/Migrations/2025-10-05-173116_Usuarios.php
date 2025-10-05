<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id"=> [
                "type"=> "INT",
                "constraint"=> 11,
                "unsigned"=> true,
                "auto_increment"=> true
            ],
            "apellidos"=>[
                "type"=> "VARCHAR",
                "constraint"=> "40",
                "null"=> false
            ],
            "nombres"=>[
                "type"=> "VARCHAR",
                "constraint"=> "40",
                "null"=> false
            ],
            "nomusuario"=>[
                "type"=> "VARCHAR",
                "constraint"=> "40",
                "null"=> false
            ],
            "claveacceso"=>[
                "type"=> "VARCHAR",
                "constraint"=> "70",
                "null"=> false
            ],
            "nivelacceso"=>[
                "type"=> "ENUM",
                "constraint"=> ['ADMIN','USER'],
                'default'=> 'USER'
            ],
            "avatar"=>[
                "type"=>"VARCHAR",
                "constraint"=>"255",
                "null"=>true
            ],
            "create_at"=>[
                "type"=> "DATETIME",
                "null"=> false,
            ],
            "update_at"=>[
                "type"=> "DATETIME",
                "null"=> true,
            ]
        ]);
        //Definir la clave primaria
        $this->forge->addKey('id',true);
        //restricciones(constraint)
        $this->forge->addKey('nomusuario',false,true,'uk_nomusuario');
        //creación de tabla
        $this->forge->createTable('usuario');
    }

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}
