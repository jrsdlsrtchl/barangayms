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

    public function saveLoginInfo($data)
    {
        $builder = $this->db->table('tbl_activity');
        $builder->insert($data);
        if ($this->db->affectedRows() == 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }

    public function updateLogoutTime($id)
    {
        $builder = $this->db->table('tbl_activity');
        $builder->where('activity_id', $id);
        $builder->update(['logout_time' => date('Y-m-d h:i:s')]);
        if ($this->db->affectedRows() > 0) {
            return true;
        }
    }
}
