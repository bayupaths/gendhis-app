<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'session' => $this->session
        ];
        return view('content/admin/dashboard', $data);
    }
}
