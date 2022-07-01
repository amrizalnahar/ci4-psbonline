<?php

namespace App\Models;

use CodeIgniter\Model;

class authModel extends Model
{
    public function login_user($email, $password)
    {
        return $this->db->table('tb_user')->where(
            [
                'email_user' => $email,
                'password_user' => $password
            ]
        )->get()->getRowArray();
    }

    public function login_siswa($username, $password)
    {
        return $this->db->table('tb_siswa')->where(
            [
                'username_siswa' => $username,
                'password_siswa' => $password
            ]
        )->get()->getRowArray();
    }
}
