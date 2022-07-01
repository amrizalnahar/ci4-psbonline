<?php

namespace App\Models;

use CodeIgniter\Model;

class biodatasiswaModel extends Model
{
    protected $table = 'tb_biodatasiswa';
    protected $primaryKey = 'id_siswa';
    protected $allowedFields = ['nama_siswa', 'slug_siswa', 'alamat_siswa', 'provinsi_siswa', 'kota_siswa', 'pos_siswa', 'tempatlahir_siswa', 'tanggallahir_siswa', 'jeniskelamin_siswa', 'agama_siswa', 'notelp_siswa', 'Email_siswa', 'nik_siswa', 'nomorpendaftaran_siswa', 'status_pendaftaran', 'jalurmasuk_siswa', 'jurusan_siswa', 'created_at'];
    protected $useTimestamps = true;

    public function getbiodatasiswa($slug_biodatasiswa = false)
    {

        if ($slug_biodatasiswa == false) {
            return $this->findAll();
        }

        return $this->where(['slug_biodatasiswa' => $slug_biodatasiswa])->first();
    }
}
