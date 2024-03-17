<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    public function getUser()
    {
        $builder = $this->db->table('tbl_resident');
        $builder->select('*')->where('resident_id', '20');
        $result = $builder->get()->getResult();

        return $result;
    }
}
