<?php

namespace App\Model;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = "gendhis_post";
    protected $primaryKey = "post_id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = [
        'post_title', 'post_slug', 'post_cover', 'post_author',
        'post_content', 'post_status', 'published_at', 'category_id', 'user_id'
    ];
}
