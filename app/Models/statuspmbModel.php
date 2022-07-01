<?php

namespace App\Models;

use CodeIgniter\Model;

class statuspmbModel extends Model
{
    protected $table = 'tb_statuspmb';
    protected $primaryKey = 'status_pmb';
    protected $allowedFields = ['nama_status'];
    protected $useTimestamps = true;
}
