<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Author extends BaseController
{
    public function index()
    {
        echo "author";
    }

    public function freelance()
    {
        return view('content/admin/freelance');
    }
}
