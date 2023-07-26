<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Detail extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_detalle_tours' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'id_tours' => [
                'type' => 'INT',
            ],
            'descripcion' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'itinerario' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'lista_viaje' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'img_portada' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'tipo_viaje' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'altitud_max' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'dificultad' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            
        ]);
        $this->forge->addKey('id_detalle_tours', true);
        $this->forge->createTable('detail');
    }

    public function down()
    {
        $this->forge->dropTable('detail');
    }
}