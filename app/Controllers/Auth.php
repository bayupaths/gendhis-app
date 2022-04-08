<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Auth extends BaseController
{
    public function index()
    {
        session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('auth/login', $data);
    }

    public function register()
    {
        session();
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('auth/register', $data);
    }

    public function process()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|min_length[4]|max_length[30]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 30 Karakter',
                ]
            ],
            'email' => [
                'rules' => 'required|valid_emails|is_unique[gendhis_users.user_email]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_emails' => '{field} harus valid',
                    'is_unique' => '{field} telah digunakan'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[16]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 16 Karakter'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/register')->withInput()->with('validation', $validation);
        }

        $users = new UsersModel();
        $users->insert([
            'user_name' => $this->request->getVar('nama'),
            'user_email' => $this->request->getVar('email'),
            'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'user_image'   => 'default.jpg',
            'role_id' => 1
        ]);
        session()->setFlashdata('success', 'registrasi berhasil silahkan login');
        return redirect()->to('/login');
    }

    public function login()
    {

        if (!$this->validate([
            'email' => [
                'rules' => 'required|valid_emails',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_emails' => '{field} harus valid',
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[16]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 16 Karakter'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/login')->withInput()->with('validation', $validation);
        }

        $users = new UsersModel();
        $email = $this->request->getVar('email');
        $pass  = $this->request->getVar('password');
        $dataUser = $users->where([
            'user_email' => $email
        ])->first();
        if ($dataUser) {
            if (password_verify($pass, $dataUser->user_password)) {
                session()->set([
                    'email' => $dataUser->user_email,
                    'name'  => $dataUser->user_name,
                    'logged_in' => TRUE
                ]);
                return redirect()->to('/admin/dashboard');
            } else {
                session()->setFlashdata('error', 'username & password salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'username & password salah');
            return redirect()->back();
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
