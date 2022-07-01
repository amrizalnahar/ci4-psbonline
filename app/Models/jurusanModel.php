<?php

namespace App\Models;

use CodeIgniter\Model;

class jurusanModel extends Model
{
    public function getAllData()
    {
        return $this->db->table('tb_jurusan')
            ->orderBy('id_jurusan', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function insertData($data)
    {
        $this->db->table('tb_jurusan')
            ->insert($data);
    }

    public function editData($data)
    {
        $this->db->table('tb_jurusan')
            ->where('id_jurusan', $data['id_jurusan'])
            ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('tb_jurusan')
            ->where('id_jurusan', $data['id_jurusan'])
            ->delete($data);
    }

    public function totalJurusan()
    {
        return  $this->db->table('tb_jurusan')->countAllResults();
    }
}
