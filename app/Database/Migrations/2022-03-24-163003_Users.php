<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_name' => [
                'type'           => 'VARCHAR',
                'constraint'     => '125',
            ],
            'user_profile' => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'user_email'   => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                'unique'         => true,
            ],
            'user_password' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'user_image' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'user_status' => [
                'type'           => 'ENUM',
                'constraint'     => ['active', 'non-active'],
                'default'        => 'non-active',
            ],
            'user_active' => [
                'type'          => 'INT',
                'constraint'    => 2,
                'default'       => '0'
            ],
            'created_at' => [
                'type'           => 'TIMESTAMP',
                'null' => true
            ],
            'updated_at' => [
                'type'           => 'TIMESTAMP',
                'null'           => true
            ],
            'role_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('user_id', true);
        $this->forge->createTable('gendhis_users');
    }

    public function down()
    {
        $this->forge->dropTable('gendhis_users');
    }
}
