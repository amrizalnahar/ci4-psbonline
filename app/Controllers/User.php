<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\userModel;

class User extends BaseController
{
    public function __construct()
    {
        $this->userModel = new userModel();
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'Admin PMB Online',
            'subtitle' => 'user',
            'currentAdminMenu' => 'profiladmin',
            'currentAdminSubMenu' => 'profiladmin',
            'user' => $this->userModel->getAllData(),
        ];
        return view('admin/v_profiladmin', $data);
    }

    public function insertData()
    {
        $file = $this->request->getFile('foto_user');
        $nama_file = $file->getRandomName();
        $data = [
            'nama_user' => $this->request->getPost('nama_user'),
            'email_user' => $this->request->getPost('email_user'),
            'password_user' => $this->request->getPost('password_user'),
            'foto_user' => $nama_file,
        ];
        $file->move('dist/admin/img/', $nama_file);
        $this->userModel->insertdata($data);
        session()->setFlashdata('tambah', 'Data Berhasil Ditambahkan');
        return redirect()->to(base_url('user'));
    }

    public function editData($id_user)
    {
        $file = $this->request->getFile('foto_user');
        if ($file->getError() == 4) {
            $data = [
                'id_user' => $id_user,
                'nama_user' => $this->request->getPost('nama_user'),
                'email_user' => $this->request->getPost('email_user'),
                'password_user' => $this->request->getPost('password_user'),
            ];
            $this->userModel->editdata($data);
        } else {
            $nama_file = $file->getRandomName();
            $data = [
                'id_user' => $id_user,
                'nama_user' => $this->request->getPost('nama_user'),
                'email_user' => $this->request->getPost('email_user'),
                'password_user' => $this->request->getPost('password_user'),
                'foto_user' => $nama_file,
            ];
            $file->move('dist/admin/img/', $nama_file);
            $this->userModel->editdata($data);
        }
        session()->setFlashdata('edit', 'Data Berhasil Diedit');
        return redirect()->to(base_url('user'));
    }

    public function deleteData($id_user)
    {
        $data = [
            'id_user' => $id_user,
        ];
        $this->userModel->deletedata($data);
        session()->setFlashdata('delete', 'Data Berhasil Dihapus');
        return redirect()->to(base_url('user'));
    }
}
