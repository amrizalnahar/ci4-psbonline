<?php

namespace App\Models;

use CodeIgniter\Model;

class userModel extends Model
{
    public function getAllData()
    {
        return $this->db->table('tb_user')
            ->orderBy('id_user', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function insertData($data)
    {
        $this->db->table('tb_user')
            ->insert($data);
    }

    public function editData($data)
    {
        $this->db->table('tb_user')
            ->where('id_user', $data['id_user'])
            ->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('tb_user')
            ->where('id_user', $data['id_user'])
            ->delete($data);
    }

    public function totalUser()
    {
        return  $this->db->table('tb_user')->countAllResults();
    }
}
