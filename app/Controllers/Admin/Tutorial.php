<?php

namespace App\Controllers\Admin;

use App\Models\CategoryModel;
use App\Models\PostModel;

use App\Controllers\BaseController;

class Tutorial extends BaseController
{
    public function index()
    {
        $data = [
            'session' => $this->session,
        ];
        return view('content/admin/pribadi', $data);
    }

    public function freelance()
    {
        return view('content/admin/freelance');
    }

    public function listTutorial()
    {
        return view('content/admin/daftar_tutorial');
    }

    public function addPost()
    {
        $category = new CategoryModel();
        $category = $category->getCategory(['category_sub_id' => 0])->getResultArray();
        $data = [
            'session' => $this->session,
            'categories' => $category
        ];
        return view('content/admin/add_post', $data);
    }

    public function change_category()
    {
        if ($this->request->getVar('action')) {
            $action = $this->request->getVar('action');
            $category_id = $this->request->getVar('category_id');
            if ($action == 'get_jenis') {
                $category = new CategoryModel();
                $category = $category->getCategory(['category_sub_id' => $category_id])->getResult();
                echo json_encode($category);
            }
        }
    }

    public function check_titlePost()
    {
        $slug = url_title($this->request->getVar('title'), '-', true);
        if ($slug) {
            $title = new PostModel();
            $title = $title->checkTitle($slug)->getResult();
            if (empty($title)) {
                $data['status']  = true;
                $data['message'] = 'Judul dapat digunakan';
            } else {
                $data['status'] = false;
                $data['message'] = 'Judul sudah tersedia, tidak dapat digunakan!';
            }
        } else {
            $data['message'] = 'Judul harus diisi!';
        }
        echo json_encode($data);
    }
    public function submitpost()
    {
        dd($this->request->getVar());
    }
}
