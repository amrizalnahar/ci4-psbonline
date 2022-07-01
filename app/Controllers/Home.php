<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\siswaModel;

class Home extends BaseController
{

    public function __construct()
    {
        $this->siswaModel = new siswaModel();
        // $this->jurusanModel = new jurusanModel();
        helper('form');
    }
    public function index()
    {
        return view('user/v_user');
    }
    public function biodataSiswa()
    {
        return view('user/v_biodatasiswa');
    }
    
    public function statuspendaftaran()
    {
        $data = [
            'pmb'    => $this->siswaModel->getBiodataSiswa(),
            // 'jurusan'    => $this->jurusanModel->getAllData(),
        ];

        return view('user/v_status', $data);
    }

    public function cetakkelulusan()
    {
        $data = [
            'pmb'    => $this->siswaModel->getBiodataSiswa(),
            // 'jurusan'    => $this->jurusanModel->getAllData(),
        ];

        return view('user/v_cetak', $data);
    }
}
