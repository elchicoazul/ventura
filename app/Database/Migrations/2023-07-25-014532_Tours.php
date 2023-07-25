<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tours extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'tours_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'url_img' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'dias' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'personas' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'ciudad' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'precio' => [
                'type' => 'double',
                'null' => true,
            ],
            
        ]);
        $this->forge->addKey('tours_id', true);
        $this->forge->createTable('tours');
    }

    public function down()
    {
        $this->forge->dropTable('tours');
    }
}
