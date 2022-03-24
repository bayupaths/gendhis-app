<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = "gendhis_users";
    protected $primaryKey = "user_id";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = [
        'user_name', 'user_profile', 'user_email', 'user_password', 'user_image',
        'user_status', 'user_active', 'role_id'
    ];
}
