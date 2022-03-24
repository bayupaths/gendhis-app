<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Role extends Seeder
{
    public function run()
    {
        $data_role = [
            [
                'role_name' => 'Admin'
            ],
            [
                'role_name' => 'Member'
            ]
        ];
        foreach ($data_role as $data) {
            $this->db->table('gendhis_role')->insert($data);
        }
    }
}
