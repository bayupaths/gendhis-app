<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RoleUsers extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'role_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'role_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ]
        ]);
        $this->forge->addKey('role_id', TRUE);
        $this->forge->createTable('gendhis_role');
    }

    public function down()
    {
        $this->forge->dropTable('gendhis_role');
    }
}
