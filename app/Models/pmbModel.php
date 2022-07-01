<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Session\Session;

class pmbModel extends Model
{
    public function getPMBmasuk()
    {
        return $this->db->table('tb_siswa')
            ->join('tb_jurusan', 'tb_jurusan.id_jurusan = tb_siswa.id_jurusan')
            ->orderBy('id_siswa', 'ASC')
            ->where('status_pmb', '0')
            ->get()
            ->getResultArray();
    }

    public function getPMBditerima()
    {
        return $this->db->table('tb_siswa')
            ->join('tb_jurusan', 'tb_jurusan.id_jurusan = tb_siswa.id_jurusan')
            ->orderBy('id_siswa', 'ASC')
            ->where('status_pmb', '1')
            ->get()
            ->getResultArray();
    }

    public function getPMBdicadangan()
    {
        return $this->db->table('tb_siswa')
            ->join('tb_jurusan', 'tb_jurusan.id_jurusan = tb_siswa.id_jurusan')
            ->orderBy('id_siswa', 'ASC')
            ->where('status_pmb', '2')
            ->get()
            ->getResultArray();
    }

    public function getPMBditolak()
    {
        return $this->db->table('tb_siswa')
            ->join('tb_jurusan', 'tb_jurusan.id_jurusan = tb_siswa.id_jurusan')
            ->orderBy('id_siswa', 'ASC')
            ->where('status_pmb', '3')
            ->get()
            ->getResultArray();
    }

    public function detailData($id_siswa)
    {
        return $this->db->table('tb_siswa')
            ->join('tb_jurusan', 'tb_jurusan.id_jurusan = tb_siswa.id_jurusan')
            // ->join('tb_jalurmasuk', 'tb_jalurmasuk.id_jalurmasuk = tb_siswa.id_jalurmasuk')
            ->where('id_siswa', $id_siswa)
            ->get()
            ->getRowArray();
    }

    public function editData($data)
    {
        $this->db->table('tb_siswa')
            ->where('id_siswa', $data['id_siswa'])
            ->update($data);
    }
}
