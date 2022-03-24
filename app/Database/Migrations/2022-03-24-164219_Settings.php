<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Settings extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'setting_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'setting_name' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'setting_logo' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'setting_description' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'setting_about' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'setting_address' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'setting_phone' => [
                'type'          => 'VARCHAR',
                'constraint'    => '20',
            ],
            'setting_email' => [
                'type'          => 'VARCHAR',
                'constraint'    => '100',
            ],
            'setting_facebook' => [
                'type'          => 'VARCHAR',
                'constraint'    => '100',
            ],
            'setting_instagram' => [
                'type'          => 'VARCHAR',
                'constraint'    => '100',
            ],
        ]);
        $this->forge->addKey('setting_id', true);
        $this->forge->createTable('gendhis_setting');
    }

    public function down()
    {
        $this->forge->dropTable('gendhis_setting');
    }
}
