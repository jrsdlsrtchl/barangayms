<?php

namespace App\Models;

use CodeIgniter\Model;


class UserManagementModel extends Model
{
    public function getUser()
    {
        $builder = $this->db->table('tbl_user');
        $builder->select('*');
        $builder->join('tbl_resident', 'tbl_user.resident_id = tbl_resident.resident_id');
        $result = $builder->get()->getResult();

        return $result;
    }

    public function addUserAccount($data)
    {
        $this->db->table('tbl_user')->insert($data);
        if ($this->db->affectedRows() >= 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }

    public function getResident()
    {
        $builder = $this->db->table('tbl_resident');
        $builder->join('tbl_purok', 'tbl_resident.purok_id = tbl_purok.purok_id');
        $builder->join('tbl_household', 'tbl_resident.household_id = tbl_household.household_id');
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function deleteUser($id)
    {
        $builder = $this->db->table('tbl_user');
        $builder->delete(['user_id' => $id]);
    }
}
