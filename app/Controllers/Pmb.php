<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\pmbModel;


class Pmb extends BaseController
{

    public function __construct()
    {
        // $this->siswaModel = new siswaModel();
        $this->pmbModel = new pmbModel();
        helper('form');
    }

    public function index()
    {
        $data = [
            'title' => 'Admin PMB Online',
            'subtitle' => 'Informasi Pendaftaran Masuk',
            'currentAdminMenu' => 'infopendaftaran',
            'currentAdminSubMenu' => 'masuk',
            'pmb'    => $this->pmbModel->getPMBmasuk(),

        ];

        return view('admin/v_daftarmasuk', $data);
    }
    public function listDiterima()
    {
        $data = [
            'title' => 'Admin PMB Online',
            'subtitle' => 'Informasi Pendaftaran Mahasiswa Diterima',
            'currentAdminMenu' => 'infopendaftaran',
            'currentAdminSubMenu' => 'diterima',
            'pmb'    => $this->pmbModel->getPMBditerima(),

        ];

        return view('admin/v_daftarditerima', $data);
    }
    public function listDicadangan()
    {
        $data = [
            'title' => 'Admin PMB Online',
            'subtitle' => 'Informasi Pendaftaran Mahasiswa Diterima',
            'currentAdminMenu' => 'infopendaftaran',
            'currentAdminSubMenu' => 'cadangan',
            'pmb'    => $this->pmbModel->getPMBdicadangan(),

        ];

        return view('admin/v_daftarcadangan', $data);
    }

    public function listDitolak()
    {
        $data = [
            'title' => 'Admin PMB Online',
            'subtitle' => 'Informasi Pendaftaran Mahasiswa Diterima',
            'currentAdminMenu' => 'infopendaftaran',
            'currentAdminSubMenu' => 'ditolak',
            'pmb'    => $this->pmbModel->getPMBditolak(),

        ];

        return view('admin/v_daftartolak', $data);
    }
    public function infodetailSiswa($id_siswa)
    {
        $data = [
            'title' => 'Admin PMB Online',
            'subtitle' => 'Informasi Pendaftaran Masuk',
            'currentAdminMenu' => 'infopendaftaran',
            'currentAdminSubMenu' => 'masuk',
            'pmb'    => $this->pmbModel->detailData($id_siswa),

        ];

        return view('admin/v_detailsiswa', $data);
    }
    public function infodetailSiswaterima($id_siswa)
    {
        $data = [
            'title' => 'Admin PMB Online',
            'subtitle' => 'Informasi Pendaftaran Masuk',
            'currentAdminMenu' => 'infopendaftaran',
            'currentAdminSubMenu' => 'diterima',
            'pmb'    => $this->pmbModel->detailData($id_siswa),

        ];

        return view('admin/v_detailsiswaterima', $data);
    }
    public function infodetailSiswacadangan($id_siswa)
    {
        $data = [
            'title' => 'Admin PMB Online',
            'subtitle' => 'Informasi Pendaftaran Masuk',
            'currentAdminMenu' => 'infopendaftaran',
            'currentAdminSubMenu' => 'cadangan',
            'pmb'    => $this->pmbModel->detailData($id_siswa),

        ];

        return view('admin/v_detailsiswacadangan', $data);
    }
    public function infodetailSiswatolak($id_siswa)
    {
        $data = [
            'title' => 'Admin PMB Online',
            'subtitle' => 'Informasi Pendaftaran Masuk',
            'currentAdminMenu' => 'infopendaftaran',
            'currentAdminSubMenu' => 'ditolak',
            'pmb'    => $this->pmbModel->detailData($id_siswa),

        ];

        return view('admin/v_detailsiswaterima', $data);
    }



    public function infopendaftaranMasuk()
    {
        $data = [
            'title' => 'Admin PMB Online',
            'subtitle' => 'Informasi Pendaftaran Masuk',
            'currentAdminMenu' => 'infopendaftaran',
            'currentAdminSubMenu' => 'masuk',
            'pmb'    => $this->pmbModel->getPMBmasuk(),

        ];

        return view('admin/v_daftarmasuk', $data);
    }

    public function infopendaftaranDiterima($id_siswa)
    {
        $data = [
            'id_siswa' => $id_siswa,
            'status_pmb' => '1'
        ];
        $this->pmbModel->editData($data);
        session()->setFlashdata('terima', 'Mahasiswa Diterima');
        return  redirect()->to('/pmb/infopendaftaranMasuk');
    }

    public function infopendaftaranCadangan($id_siswa)
    {
        $data = [
            'id_siswa' => $id_siswa,
            'status_pmb' => '2'
        ];
        $this->pmbModel->editData($data);
        session()->setFlashdata('cadangan', 'Mahasiswa Dicadangkan');
        return  redirect()->to('/pmb/infopendaftaranMasuk');
    }

    public function infopendaftaranDitolak($id_siswa)
    {
        $data = [
            'id_siswa' => $id_siswa,
            'status_pmb' => '3'
        ];
        $this->pmbModel->editData($data);
        session()->setFlashdata('tolak', 'Mahasiswa Ditolak');
        return  redirect()->to('/pmb/infopendaftaranMasuk');
    }
}
