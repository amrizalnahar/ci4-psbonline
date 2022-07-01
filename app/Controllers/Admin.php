<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\siswaModel;
use App\Models\jurusanModel;
use App\Models\userModel;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->siswaModel = new siswaModel();
        $this->jurusanModel = new jurusanModel();
        $this->userModel = new userModel();
        helper('form');
    }

    public function index()
    {
        // $siswaModel = new siswaModel();

        // $status_kelulusan  = $siswaModel->select('COUNT(tb_siswa.id_siswa) AS jumlah')
        //     ->join('tb_statuspmb', 'tb_siswa.status_pmb = tb_statuspmb.status_pmb')
        //     ->groupby('tb_siswa.status_pmb')
        //     ->get();

        $data = [
            'title' => 'Admin PMB Online',
            'subtitle' => 'Dashboard',
            'currentAdminMenu' => 'dashboard',
            'currentAdminSubMenu' => 'home',
            'totaljurusan' => $this->jurusanModel->totalJurusan(),
            'status_masuk' => $this->siswaModel->totalsiswaMasuk(),
            'status_diterima' => $this->siswaModel->totalsiswaDiterima(),
            'status_cadangan' => $this->siswaModel->totalsiswaCadangan(),
            'status_ditolak' => $this->siswaModel->totalsiswaDitolak(),
            'total_admin' => $this->userModel->totalUser(),
            'status_pmb' => $this->siswaModel->grafikInfo(),
            'status_kelulusan' => $this->siswaModel->statuslulus(),
        ];

        return view('admin/v_home', $data);
    }
}
