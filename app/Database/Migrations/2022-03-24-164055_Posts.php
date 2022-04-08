<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Posts extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'post_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'post_number'   => [
                'type'          => 'CHAR',
                'constraint'    => '20',
            ],
            'post_title' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'unique'        => true
            ],
            'post_slug' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'unique'        => true
            ],
            'post_cover' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'post_author' => [
                'type'           => 'VARCHAR',
                'constraint'     => '125',
            ],
            'post_content' => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'post_status' => [
                'type'           => 'ENUM',
                'constraint'     => ['publish', 'pending', 'draft'],
                'default'        => 'draft',
            ],
            'created_at' => [
                'type'           => 'TIMESTAMP',
                'null'           => true
            ],
            'updated_at' => [
                'type'           => 'TIMESTAMP',
                'null'           => true
            ],
            'published_at' => [
                'type'           => 'TIMESTAMP',
                'null'           => true
            ],
            'category_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'user_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('post_id', true);
        $this->forge->createTable('gendhis_post');
    }

    public function down()
    {
        $this->forge->dropTable('gendhis_post');
    }
}
