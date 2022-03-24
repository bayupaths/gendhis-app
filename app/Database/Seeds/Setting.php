<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Setting extends Seeder
{
    public function run()
    {
        $setting_data = [
            'setting_name'   => 'Gendhis',
            'setting_logo'  => 'gendhis.png',
            'setting_description'   => 'Sebuah Media untuk memberikan Tutorial yang spesifik dan mudah dipahami Yang Diharapkan Dapat Memberikan Manfaat Kepada Pembaca Mengenai Tiap Topik Yang Dibahas dalam Gendhis.Com',
            'setting_about' => '',
            'setting_address'   => 'Jalan Lembuayu, Desa Susukan RT 02 RW 03 Kecamatan Sumbang',
            'setting_phone'   => '08812785635',
            'setting_email'   => 'bayupur1710@gmail.com',
            'setting_facebook'  => 'Bayu Purnomo',
            'setting_instagram'   => '@bayuuu.p'
        ];
        $this->db->table('gendhis_setting')->insert($setting_data);
    }
}
