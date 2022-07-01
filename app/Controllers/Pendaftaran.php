<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\siswaModel;

class Pendaftaran extends BaseController
{
    public function __construct()
    {
        $this->siswaModel = new siswaModel();
        helper('form');
    }

    public function index()
    {

        $data = [
            'title' => 'PMB Online',
            'subtitle' => 'Pendaftaran',
            'validation' => \Config\Services::validation(),

        ];
        return view('user/v_formpendaftaran', $data);
    }

    public function simpanpendaftaran()
    {
        if ($this->validate([
            'username_siswa' => [
                'label' => 'username_siswa',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!'
                ]
            ],
            'namalengkap_siswa' => [
                'label' => 'namalengkap_siswa',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!'
                ]
            ],
            'nik_siswa' => [
                'label' => 'NIK_Siswa',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!'
                ]
            ],
            'email_siswa' => [
                'label' => 'Email_siswa',
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!',
                    'valid_email' => 'Harus dengan format Email !!'
                ]
            ],
        ])) {
            $nik_pass = $this->request->getPost('nik_siswa');
            $no_pendaftaran = $this->siswaModel->noPendaftaran();
            $data = [
                'no_pendaftaran' => $no_pendaftaran,
                'nik_siswa' => $this->request->getPost('nik_siswa'),
                'namalengkap_siswa' => $this->request->getPost('namalengkap_siswa'),
                'username_siswa' => $this->request->getPost('username_siswa'),
                'email_siswa' => $this->request->getPost('email_siswa'),
                'password_siswa' => $nik_pass,
            ];
            $this->siswaModel->insertData($data);
            session()->setFlashdata('pesan', 'Selamat Pendaftaran Berhasil! Silahkan Login Untuk Melengkapi Data.');
            return redirect()->to('pendaftaran');
        } else {
            # code...
            // jika ada validasi
            $validation =  \Config\Services::validation();
            return redirect()->to('pendaftaran')->withInput()->with('validation', $validation);
        }
    }
}
