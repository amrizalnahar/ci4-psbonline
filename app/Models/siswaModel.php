<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Session\Session;

class siswaModel extends Model
{
    public function getAllData()
    {
        return $this->db->table('tb_siswa')
            ->join('tb_jurusan', 'tb_jurusan.id_jurusan = tb_siswa.id_jurusan')
            ->orderBy('id_siswa', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function getBiodataSiswa()
    {
        return $this->db->table('tb_siswa')
            ->join('tb_jurusan', 'tb_jurusan.id_jurusan = tb_siswa.id_jurusan')
            // ->join('tb_jalurmasuk', 'tb_jalurmasuk.id_jalurmasuk = tb_siswa.id_jalurmasuk')
            ->where('id_siswa', session()->get('id_siswa'))
            ->get()
            ->getRowArray();
    }

    public function grafikInfo()
    {
        return $this->db->table('tb_siswa')
            ->orderBy('status_pmb', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function insertData($data)
    {
        $this->db->table('tb_siswa')
            ->insert($data);
    }

    public function editData($data)
    {
        $this->db->table('tb_siswa')
            ->where('id_siswa', $data['id_siswa'])
            ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('tb_siswa')
            ->where('id_siswa', $data['id_siswa'])
            ->delete($data);
    }

    public function noPendaftaran()
    {
        $kode = $this->db->table('tb_siswa')
            ->select('RIGHT(no_pendaftaran,3) as no_pendaftaran', false)
            ->orderBy('no_pendaftaran', 'DESC')
            ->limit(1)->get()->getRowArray();

        if ($kode['no_pendaftaran'] == null) {
            $no = 1;
        } else {
            $no = intval($kode['no_pendaftaran']) + 1;
        }

        $tgl = date('Ymd');
        $batas = str_pad($no, 3, "0", STR_PAD_LEFT);
        $no_pendaftaran = $tgl . $batas;
        return $no_pendaftaran;
    }

    public function totalsiswaMasuk()
    {
        return  $this->db->table('tb_siswa')
            ->where('status_pmb', '0')
            ->countAllResults();
    }
    public function totalsiswaDiterima()
    {
        return  $this->db->table('tb_siswa')
            ->where('status_pmb', '1')
            ->countAllResults();
    }
    public function totalsiswaCadangan()
    {
        return  $this->db->table('tb_siswa')
            ->where('status_pmb', '2')
            ->countAllResults();
    }
    public function totalsiswaDitolak()
    {
        return  $this->db->table('tb_siswa')
            ->where('status_pmb', '3')
            ->countAllResults();
    }

    public function statuslulus()
    {
        return $this->db->table('tb_siswa')
            ->select('COUNT(tb_siswa.id_siswa) AS jumlah, tb_statuspmb.nama_status AS status_pmb')
            ->join('tb_statuspmb', 'tb_statuspmb.status_pmb = tb_siswa.status_pmb')
            ->groupby('tb_siswa.status_pmb')
            ->get();
        // ->getResultArray();
    }
}
