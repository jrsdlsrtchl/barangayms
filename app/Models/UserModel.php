<?php

namespace App\Models;

use CodeIgniter\Model;


class UserModel extends Model
{
    public function addUserAccount($data)
    {
        $this->db->table('tbl_user')->insert($data);
        if ($this->db->affectedRows() >= 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }
}
