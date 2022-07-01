<?php

namespace App\Models;

use CodeIgniter\Model;

class jkModel extends Model
{
    public function getAllData()
    {
        return $this->db->table('tb_jk')
            ->orderBy('id_jk', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function insertData($data)
    {
        $this->db->table('tb_jk')
            ->insert($data);
    }

    public function editData($data)
    {
        $this->db->table('tb_jk')
            ->where('id_jk', $data['id_jk'])
            ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('tb_jk')
            ->where('id_jk', $data['id_jk'])
            ->delete($data);
    }
}
