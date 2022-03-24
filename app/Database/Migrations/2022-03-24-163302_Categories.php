<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categories extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'category_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'category_sub_id' => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
            ],
            'category_name'  => [
                'type'          => 'VARCHAR',
                'constraint'    => '125'
            ],
            'category_slug' => [
                'type'          => 'VARCHAR',
                'constraint'    => '125',
                'unique'         => true,
            ],
            'category_cover' => [
                'type'          => 'VARCHAR',
                'constraint'    => '100'
            ],
            'category_icon' => [
                'type'          => 'VARCHAR',
                'constraint'    => '100'
            ]
        ]);
        $this->forge->addKey('category_id', true);
        $this->forge->createTable('gendhis_category');
    }

    public function down()
    {
        $this->forge->dropTable('gendhis_category');
    }
}
