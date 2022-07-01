<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\jurusanModel;

class Jurusan extends BaseController
{
    public function __construct()
    {
        $this->jurusanModel = new jurusanModel();
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'Admin PMB Online',
            'subtitle' => 'jurusan',
            'currentAdminMenu' => 'jurusan',
            'currentAdminSubMenu' => 'jurusan',
            'jurusan' => $this->jurusanModel->getAllData(),
        ];
        return view('admin/v_jurusan', $data);
    }

    public function insertData()
    {
        $data = [
            'nama_jurusan' => $this->request->getPost('nama_jurusan'),
        ];
        $this->jurusanModel->insertdata($data);
        session()->setFlashdata('tambah', 'Data Berhasil Ditambahkan');
        return redirect()->to(base_url('jurusan'));
    }

    public function editData($id_Jurusan)
    {
        $data = [
            'id_jurusan' => $id_Jurusan,
            'nama_jurusan' => $this->request->getPost('nama_jurusan'),
        ];
        $this->jurusanModel->editdata($data);
        session()->setFlashdata('edit', 'Data Berhasil Diedit');
        return redirect()->to(base_url('jurusan'));
    }

    public function deleteData($id_jurusan)
    {
        $data = [
            'id_jurusan' => $id_jurusan,
        ];
        
        $this->jurusanModel->deletedata($data);
        session()->setFlashdata('delete', 'Data Berhasil Dihapus');
        return redirect()->to(base_url('jurusan'));
    }
}
