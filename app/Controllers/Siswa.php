<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\siswaModel;
use App\Models\jurusanModel;


class Siswa extends BaseController
{

    public function __construct()
    {
        $this->siswaModel = new siswaModel();
        $this->jurusanModel = new jurusanModel();
        helper('form');
    }

    public function index()
    {
        $data = [
            'siswa'    => $this->siswaModel->getBiodataSiswa(),
            'jurusan'    => $this->jurusanModel->getAllData(),
        ];

        return view('user/v_home', $data);
    }

    public function updatePendaftaran($id_siswa)
    {
        $data = [
            'id_siswa' => $id_siswa,
            'namalengkap_siswa' => $this->request->getPost('namalengkap_siswa'),
            'ibukandung_siswa' => $this->request->getPost('ibukandung_siswa'),
            'email_siswa' => $this->request->getPost('email_siswa'),
            'jk_siswa' => $this->request->getPost('jk_siswa'),
            'id_jurusan' => $this->request->getPost('id_jurusan'),
            'nik_siswa' => $this->request->getPost('nik_siswa'),
            // 'namalengkap_siswa' => $this->request->getPost('namalengkap_siswa'),
        ];

        $this->siswaModel->editData($data);
        session()->setFlashdata('pesan', 'Data berhasil di perbaharui');
        return redirect()->to('/siswa');
    }
}
