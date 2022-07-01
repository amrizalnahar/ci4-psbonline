<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\authModel;


class Auth extends BaseController
{
    public function __construct()
    {
        $this->authModel = new authModel();
        helper('form');
    }

    public function index()
    {
        return view('user/v_user');
    }

    public function login()
    {
        $data = [
            'title' => 'Admin PMB Online',
            'subtitle' => 'Login',
        ];

        return view('admin/v_loginadmin', $data);
    }

    public function cek_login_user()
    {
        if ($this->validate([
            'email_user' => [
                'label' => 'Email',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!',
                    'valid_email' => 'Harus dengan format Email !!'
                ]
            ],
            'password_user' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!',
                ],
            ]
        ])) {
            $email = $this->request->getPost('email_user');
            $password = $this->request->getPost('password_user');
            $cek_login = $this->authModel->login_user($email, $password);
            if ($cek_login) {
                session()->set('nama_user', $cek_login['nama_user']);
                session()->set('email_user', $cek_login['email_user']);
                session()->set('foto_user', $cek_login['foto_user']);
                session()->set('level', 'admin');
                return redirect()->to(base_url('Admin'));
            } else {
                session()->setFlashdata('pesan', 'Email atau Password Salah !!');
                return redirect()->to(base_url('auth/login'));
            }
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/login'));
        }
    }

    public function logout()
    {
        session()->remove('nama_user');
        session()->remove('email_user');
        session()->remove('foto');
        session()->remove('level');
        session()->setFlashdata('pesan', 'Logout Sukses');
        return redirect()->to(base_url('auth/login'));
    }

    public function login_siswa()
    {

        $data = [
            'title' => 'PMB Online',
            'subtitle' => 'Login',
            'validation' => \Config\Services::validation(),
        ];
        return view('user/v_loginsiswa', $data);
    }

    public function cek_login_siswa()
    {
        if ($this->validate([
            'username_siswa' => [
                'label' => 'username_siswa',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!',

                ]
            ],
            'password_siswa' => [
                'label' => 'Password_siswa',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!',
                ],
            ]
        ])) {
            $username = $this->request->getPost('username_siswa');
            $password = $this->request->getPost('password_siswa');
            $cek_login = $this->authModel->login_siswa($username, $password);
            if ($cek_login) {
                session()->set('id_siswa', $cek_login['id_siswa']);
                session()->set('username_siswa', $cek_login['username_siswa']);
                session()->set('namalengkap_siswa', $cek_login['namalengkap_siswa']);
                session()->set('nik_siswa', $cek_login['nik_siswa']);
                session()->set('email_siswa', $cek_login['email_siswa']);
                session()->set('level', 'siswa');
                return redirect()->to('/Siswa');
            } else {
                session()->setFlashdata('pesan', 'Username atau Password Salah !!');
                return redirect()->to('/auth/login_siswa');
            }
        } else {
            $validation = \Config\Services::validation();
            return redirect()->to('/auth/login_siswa')->withInput()->with('validation', $validation);
        }
    }


    public function logout_siswa()
    {
        session()->remove('username_siswa');
        session()->remove('namalengkap_siswa');
        session()->remove('nik_siswa');
        session()->remove('email_siswa');
        session()->remove('level');
        session()->setFlashdata('pesan', 'Logout Sukses');
        return redirect()->to(base_url('auth/login_siswa'));
    }
}
