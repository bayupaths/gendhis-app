<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = "gendhis_post";
    protected $primaryKey = "post_id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = [
        'post_title', 'post_slug', 'post_cover', 'post_author',
        'post_content', 'post_status', 'published_at', 'category_id', 'user_id'
    ];

    public function getPost(array $params = null, $orderBy = 'post_number', $by = 'ASC', $limit = 5)
    {
        $query = $this->db->table('gendhis_post as post')
            ->join('gendhis_category as category', 'category.category_id=post.category_id')
            ->where($params)
            ->orderBy($orderBy, $by)
            ->limit($limit)
            ->get();
        return $query;
    }

    public function categoryPost(array $params = null, int $paginate)
    {
        if ($params == null) {
            return $this->findAll();
        }
        $query = $this->table('gendhis_post')
            ->join('gendhis_category', 'gendhis_category.category_id=gendhis_post.category_id')
            ->where($params)
            ->paginate($paginate, 'gendhis_post');
        return $query;
    }

    public function checkTitle(string $params = null)
    {
        if ($params == null) {
            return false;
        }
        $query = $this->table('gendhis_post')
            ->select('post_title, post_slug')
            ->like('post_slug', $params)
            ->get();
        return $query;
    }
}
