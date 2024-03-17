<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthenticationModel extends Model
{

    public function verifyUsername($username)
    {
        $builder = $this->db->table('tbl_user');
        $builder->select("resident_id, usertype, password");
        $builder->where('username', $username);
        $result = $builder->get();
        if (count($result->getResultArray()) == 1) {
            return $result->getRowArray();
        } else {
            return false;
        }
    }
}
