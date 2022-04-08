<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Post extends Seeder
{
    public function run()
    {
        $data_post = [
            [
                'post_number'   => '01',
                'post_title'    => 'Pengenalan Microsoft Office Word 2016',
                'post_slug'     => 'pengenalan-microsoft-office-word-2016',
                'post_cover'    => 'word.png',
                'post_author'   => 'Bayu Purnomo',
                'post_content'  => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, totam hic autem maxime error ipsam quisquam! Officia placeat eum molestias dignissimos, cupiditate facere, velit exercitationem asperiores laboriosam animi, ipsa veniam quasi saepe voluptatum quam quidem temporibus quisquam illum tempore! Animi doloremque voluptatem, ab sunt illum sequi ad numquam architecto ipsa?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab eligendi veniam doloribus tempora ipsum reiciendis vero accusantium vel, numquam eius repellat aut provident obcaecati aliquid, excepturi sapiente soluta eum, quidem sequi cumque in optio nostrum quis. Debitis velit ut aliquam modi nihil incidunt libero. Itaque, amet doloribus nulla consectetur, provident nam saepe facilis debitis asperiores pariatur quae fugit fugiat blanditiis quibusdam facere cupiditate voluptatum quam. Quos odio vitae perferendis aut a fugiat optio, explicabo ea cumque nobis? Commodi nemo ipsum molestiae, eveniet id nisi repudiandae possimus maiores accusamus omnis nobis quisquam perspiciatis facere vero iste assumenda illo quod modi.</p>',
                'post_status'   => 'publish',
                'created_at'    => date('Y-m-d H:i:s'),
                'published_at'  => date('Y-m-d H:i:s'),
                'category_id'   => '101',
                'user_id'       => '2'
            ],
            [
                'post_number'   => '02',
                'post_title'    => 'Cara Membuka Microsoft Word 2016',
                'post_slug'     => 'cara-membuka-microsoft-office-word-2016',
                'post_cover'    => 'word.png',
                'post_author'   => 'Bayu Purnomo',
                'post_content'  => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, totam hic autem maxime error ipsam quisquam! Officia placeat eum molestias dignissimos, cupiditate facere, velit exercitationem asperiores laboriosam animi, ipsa veniam quasi saepe voluptatum quam quidem temporibus quisquam illum tempore! Animi doloremque voluptatem, ab sunt illum sequi ad numquam architecto ipsa?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab eligendi veniam doloribus tempora ipsum reiciendis vero accusantium vel, numquam eius repellat aut provident obcaecati aliquid, excepturi sapiente soluta eum, quidem sequi cumque in optio nostrum quis. Debitis velit ut aliquam modi nihil incidunt libero. Itaque, amet doloribus nulla consectetur, provident nam saepe facilis debitis asperiores pariatur quae fugit fugiat blanditiis quibusdam facere cupiditate voluptatum quam. Quos odio vitae perferendis aut a fugiat optio, explicabo ea cumque nobis? Commodi nemo ipsum molestiae, eveniet id nisi repudiandae possimus maiores accusamus omnis nobis quisquam perspiciatis facere vero iste assumenda illo quod modi.</p>',
                'post_status'   => 'publish',
                'created_at'    => date('Y-m-d H:i:s'),
                'published_at'  => date('Y-m-d H:i:s'),
                'category_id'   => '101',
                'user_id'       => '2'
            ],
            [
                'post_number'   => '03',
                'post_title'    => 'Bagian-bagian dari Microsoft Word 2016',
                'post_slug'     => 'bagian-bagian-dari-microsoft-office-word-2016',
                'post_cover'    => 'word.png',
                'post_author'   => 'Bayu Purnomo',
                'post_content'  => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, totam hic autem maxime error ipsam quisquam! Officia placeat eum molestias dignissimos, cupiditate facere, velit exercitationem asperiores laboriosam animi, ipsa veniam quasi saepe voluptatum quam quidem temporibus quisquam illum tempore! Animi doloremque voluptatem, ab sunt illum sequi ad numquam architecto ipsa?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab eligendi veniam doloribus tempora ipsum reiciendis vero accusantium vel, numquam eius repellat aut provident obcaecati aliquid, excepturi sapiente soluta eum, quidem sequi cumque in optio nostrum quis. Debitis velit ut aliquam modi nihil incidunt libero. Itaque, amet doloribus nulla consectetur, provident nam saepe facilis debitis asperiores pariatur quae fugit fugiat blanditiis quibusdam facere cupiditate voluptatum quam. Quos odio vitae perferendis aut a fugiat optio, explicabo ea cumque nobis? Commodi nemo ipsum molestiae, eveniet id nisi repudiandae possimus maiores accusamus omnis nobis quisquam perspiciatis facere vero iste assumenda illo quod modi.</p>',
                'post_status'   => 'publish',
                'created_at'    => date('Y-m-d H:i:s'),
                'published_at'  => date('Y-m-d H:i:s'),
                'category_id'   => '101',
                'user_id'       => '2'
            ],
            [
                'post_number'   => '04',
                'post_title'    => 'Cara membuka File Microsoft Word 2016',
                'post_slug'     => 'cara-membuka-file-microsoft-office-word-2016',
                'post_cover'    => 'word.png',
                'post_author'   => 'Bayu Purnomo',
                'post_content'  => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, totam hic autem maxime error ipsam quisquam! Officia placeat eum molestias dignissimos, cupiditate facere, velit exercitationem asperiores laboriosam animi, ipsa veniam quasi saepe voluptatum quam quidem temporibus quisquam illum tempore! Animi doloremque voluptatem, ab sunt illum sequi ad numquam architecto ipsa?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab eligendi veniam doloribus tempora ipsum reiciendis vero accusantium vel, numquam eius repellat aut provident obcaecati aliquid, excepturi sapiente soluta eum, quidem sequi cumque in optio nostrum quis. Debitis velit ut aliquam modi nihil incidunt libero. Itaque, amet doloribus nulla consectetur, provident nam saepe facilis debitis asperiores pariatur quae fugit fugiat blanditiis quibusdam facere cupiditate voluptatum quam. Quos odio vitae perferendis aut a fugiat optio, explicabo ea cumque nobis? Commodi nemo ipsum molestiae, eveniet id nisi repudiandae possimus maiores accusamus omnis nobis quisquam perspiciatis facere vero iste assumenda illo quod modi.</p>',
                'post_status'   => 'publish',
                'created_at'    => date('Y-m-d H:i:s'),
                'published_at'  => date('Y-m-d H:i:s'),
                'category_id'   => '101',
                'user_id'       => '2'
            ],
            [
                'post_number'   => '01',
                'post_title'    => 'Pengenalan Microsoft Office Excel 2016',
                'post_slug'     => 'pengenalan-microsoft-office-excel-2016',
                'post_cover'    => 'excel.png',
                'post_author'   => 'Bayu Purnomo',
                'post_content'  => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, totam hic autem maxime error ipsam quisquam! Officia placeat eum molestias dignissimos, cupiditate facere, velit exercitationem asperiores laboriosam animi, ipsa veniam quasi saepe voluptatum quam quidem temporibus quisquam illum tempore! Animi doloremque voluptatem, ab sunt illum sequi ad numquam architecto ipsa?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab eligendi veniam doloribus tempora ipsum reiciendis vero accusantium vel, numquam eius repellat aut provident obcaecati aliquid, excepturi sapiente soluta eum, quidem sequi cumque in optio nostrum quis. Debitis velit ut aliquam modi nihil incidunt libero. Itaque, amet doloribus nulla consectetur, provident nam saepe facilis debitis asperiores pariatur quae fugit fugiat blanditiis quibusdam facere cupiditate voluptatum quam. Quos odio vitae perferendis aut a fugiat optio, explicabo ea cumque nobis? Commodi nemo ipsum molestiae, eveniet id nisi repudiandae possimus maiores accusamus omnis nobis quisquam perspiciatis facere vero iste assumenda illo quod modi.</p>',
                'post_status'   => 'publish',
                'created_at'    => date('Y-m-d H:i:s'),
                'published_at'  => date('Y-m-d H:i:s'),
                'category_id'   => '102',
                'user_id'       => '2'
            ],
            [
                'post_number'   => '01',
                'post_title'    => 'Pengenalan Microsoft Office Power Point 2016',
                'post_slug'     => 'pengenalan-microsoft-office-power-point-2017',
                'post_cover'    => 'power-point.png',
                'post_author'   => 'Bayu Purnomo',
                'post_content'  => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, totam hic autem maxime error ipsam quisquam! Officia placeat eum molestias dignissimos, cupiditate facere, velit exercitationem asperiores laboriosam animi, ipsa veniam quasi saepe voluptatum quam quidem temporibus quisquam illum tempore! Animi doloremque voluptatem, ab sunt illum sequi ad numquam architecto ipsa?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab eligendi veniam doloribus tempora ipsum reiciendis vero accusantium vel, numquam eius repellat aut provident obcaecati aliquid, excepturi sapiente soluta eum, quidem sequi cumque in optio nostrum quis. Debitis velit ut aliquam modi nihil incidunt libero. Itaque, amet doloribus nulla consectetur, provident nam saepe facilis debitis asperiores pariatur quae fugit fugiat blanditiis quibusdam facere cupiditate voluptatum quam. Quos odio vitae perferendis aut a fugiat optio, explicabo ea cumque nobis? Commodi nemo ipsum molestiae, eveniet id nisi repudiandae possimus maiores accusamus omnis nobis quisquam perspiciatis facere vero iste assumenda illo quod modi.</p>',
                'post_status'   => 'publish',
                'created_at'    => date('Y-m-d H:i:s'),
                'published_at'  => date('Y-m-d H:i:s'),
                'category_id'   => '103',
                'user_id'       => '2'
            ],
            [
                'post_number'   => '01',
                'post_title'    => 'Pengenalan WPS Office Writer 2010',
                'post_slug'     => 'pengenalan-wps-office-writer-2010',
                'post_cover'    => 'wps-writer.png',
                'post_author'   => 'Bayu Purnomo',
                'post_content'  => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, totam hic autem maxime error ipsam quisquam! Officia placeat eum molestias dignissimos, cupiditate facere, velit exercitationem asperiores laboriosam animi, ipsa veniam quasi saepe voluptatum quam quidem temporibus quisquam illum tempore! Animi doloremque voluptatem, ab sunt illum sequi ad numquam architecto ipsa?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab eligendi veniam doloribus tempora ipsum reiciendis vero accusantium vel, numquam eius repellat aut provident obcaecati aliquid, excepturi sapiente soluta eum, quidem sequi cumque in optio nostrum quis. Debitis velit ut aliquam modi nihil incidunt libero. Itaque, amet doloribus nulla consectetur, provident nam saepe facilis debitis asperiores pariatur quae fugit fugiat blanditiis quibusdam facere cupiditate voluptatum quam. Quos odio vitae perferendis aut a fugiat optio, explicabo ea cumque nobis? Commodi nemo ipsum molestiae, eveniet id nisi repudiandae possimus maiores accusamus omnis nobis quisquam perspiciatis facere vero iste assumenda illo quod modi.</p>',
                'post_status'   => 'publish',
                'created_at'    => date('Y-m-d H:i:s'),
                'published_at'  => date('Y-m-d H:i:s'),
                'category_id'   => '101',
                'user_id'       => '2'
            ],

        ];
        foreach ($data_post as $data) {
            $this->db->table('gendhis_post')->insert($data);
        }
    }
}
