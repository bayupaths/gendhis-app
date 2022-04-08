<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Categories extends Seeder
{
    public function run()
    {
        $data = [
            [
                'category_id'     => '1',
                'category_sub_id' => '0',
                'category_name'   => 'Microsoft Office',
                'category_slug'   => 'microsoft-office',
                'category_bg'     => 'bg-ms-office',
                'category_color'  => 'color-ms-office',
                'category_icon'   => 'ms-office.png'
            ],
            [
                'category_id'     => '2',
                'category_sub_id' => '0',
                'category_name'   => 'WPS Office',
                'category_slug'   => 'wps-office',
                'category_bg'     => 'bg-wps-office',
                'category_color'  => 'color-wps-office',
                'category_icon'   => 'wsp-office.png'
            ],
            [
                'category_id'     => '3',
                'category_sub_id' => '0',
                'category_name'   => 'Web Developer',
                'category_slug'   => 'web-developer',
                'category_bg'     => 'bg-web-developer',
                'category_color'  => 'color-web-developer',
                'category_icon'   => 'web-developer.png'
            ],
            [
                'category_id'     => '4',
                'category_sub_id' => '0',
                'category_name'   => 'Framework',
                'category_slug'   => 'framework',
                'category_bg'     => 'bg-framework',
                'category_color'  => 'color-framework',
                'category_icon'   => 'framework.png'
            ],
            [
                'category_id'     => '101',
                'category_sub_id' => '1',
                'category_name'   => 'Word',
                'category_slug'   => 'microsoft-word',
                'category_bg'     => 'bg-ms-word',
                'category_color'  => 'color-ms-word',
                'category_icon'   => 'ms-word.png'
            ],
            [
                'category_id'     => '102',
                'category_sub_id' => '1',
                'category_name'   => 'Excel',
                'category_slug'   => 'microsoft-excel',
                'category_bg'     => 'bg-ms-excel',
                'category_color'  => 'color-ms-excel',
                'category_icon'   => 'ms-excel.png'
            ],
            [
                'category_id'     => '103',
                'category_sub_id' => '1',
                'category_name'   => 'Power Point',
                'category_slug'   => 'microsoft-power-point',
                'category_bg'     => 'bg-ms-pwerpoint',
                'category_color'  => 'color-ms-powerpoint',
                'category_icon'   => 'ms-powerpoint.png'
            ],
            [
                'category_id'     => '201',
                'category_sub_id' => '2',
                'category_name'   => 'Writter',
                'category_slug'   => 'wps-office-writter',
                'category_bg'     => 'bg-wps-office-writter',
                'category_color'  => 'color-wps-office-writter',
                'category_icon'   => 'wps-office-writter.png'
            ],
            [
                'category_id'     => '202',
                'category_sub_id' => '2',
                'category_name'   => 'Spreadsheet',
                'category_slug'   => 'wps-office-spreadsheet',
                'category_bg'     => 'bg-wps-office-spreadsheet',
                'category_color'  => 'color-wps-office-spreadsheet',
                'category_icon'   => 'wps-office-spreadsheet.png'
            ],
            [
                'category_id'     => '203',
                'category_sub_id' => '2',
                'category_name'   => 'Presentation',
                'category_slug'   => 'wps-office-presentation',
                'category_bg'     => 'bg-wps-office-presentation',
                'category_color'  => 'color-wps-office-presentation',
                'category_icon'   => 'wps-office-presentation.png'
            ],
            [
                'category_id'     => '301',
                'category_sub_id' => '3',
                'category_name'   => 'HTML',
                'category_slug'   => 'web-html',
                'category_bg'     => 'bg-web-html',
                'category_color'  => 'color-web-html',
                'category_icon'   => 'web-html.png'
            ],
            [
                'category_id'     => '302',
                'category_sub_id' => '3',
                'category_name'   => 'CSS',
                'category_slug'   => 'web-css',
                'category_bg'     => 'bg-web-css',
                'category_color'  => 'color-web-css',
                'category_icon'   => 'web-css.png'
            ],
            [
                'category_id'     => '303',
                'category_sub_id' => '3',
                'category_name'   => 'JavaScript',
                'category_slug'   => 'web-javascript',
                'category_bg'     => 'bg-web-javascript',
                'category_color'  => 'color-web-javascript',
                'category_icon'   => 'web-javascript.png'
            ],
            [
                'category_id'     => '304',
                'category_sub_id' => '3',
                'category_name'   => 'PHP',
                'category_slug'   => 'web-php',
                'category_bg'     => 'bg-web-php',
                'category_color'  => 'color-web-php',
                'category_icon'   => 'web-php.png'
            ],
            [
                'category_id'     => '401',
                'category_sub_id' => '4',
                'category_name'   => 'Bootstrap 4',
                'category_slug'   => 'framework-bootstrap-4',
                'category_bg'     => 'bg-framework-bootstrap-4',
                'category_color'  => 'color-framework-bootstrap-4',
                'category_icon'   => 'framework-bootstrap-4.png'
            ],
            [
                'category_id'     => '402',
                'category_sub_id' => '4',
                'category_name'   => 'Codeigniter 3',
                'category_slug'   => 'framework-codeigniter-3',
                'category_bg'     => 'bg-framework-codeigniter-3',
                'category_color'  => 'color-framework-codeigniter-3',
                'category_icon'   => 'framework-codeigniter-3.png'
            ],
        ];

        foreach ($data as $category) {
            $this->db->table('gendhis_category')->insert($category);
        }
    }
}
