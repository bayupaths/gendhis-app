<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Users extends Seeder
{
    public function run()
    {
        $data_user = [
            'user_name'     => 'Bayu Purnomo',
            'user_profile'  => 'saya adalah seorang mahasiswa semester 6 di Universitas Bina Sarana Informatika Purwokerto',
            'user_email'    => 'bayupur1710@gmail.com',
            'user_password' => password_hash('bayu1234', PASSWORD_DEFAULT),
            'user_image'    => 'bayu.jpg',
            'user_status'   => 'active',
            'user_active'   => '1',
            'role_id'       => '1'
        ];
        $this->db->table('gendhis_users')->insert($data_user);
    }
}
