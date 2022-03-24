<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Categories extends Seeder
{
    public function run()
    {
        $data = [
            [
                'category_sub_id' => '0',
                'category_name'   => 'Microsoft Office',
                'category_slug'   => 'microsoft-office',
                'category_cover'  => 'office.jpg',
                'category_icon'   => 'office.png'
            ],
            [
                'category_sub_id' => '1',
                'category_name'   => 'Microsoft Word',
                'category_slug'   => 'microsoft-word',
                'category_cover'  => 'word.jpg',
                'category_icon'   => 'word.png'
            ],
            [
                'category_sub_id' => '2',
                'category_name'   => 'Microsoft Excel',
                'category_slug'   => 'microsoft-excel',
                'category_cover'  => 'excel.jpg',
                'category_icon'   => 'excel.png'
            ],
            [
                'category_sub_id' => '0',
                'category_name'   => 'WPS Office',
                'category_slug'   => 'wps-office',
                'category_cover'  => 'wps.jpg',
                'category_icon'   => 'wps.png'
            ],
            [
                'category_sub_id' => '4',
                'category_name'   => 'WPS Office Writer',
                'category_slug'   => 'wps-office-writer',
                'category_cover'  => 'writer.jpg',
                'category_icon'   => 'writer.png'
            ],
        ];

        foreach ($data as $category) {
            $this->db->table('gendhis_category')->insert($category);
        }
    }
}
