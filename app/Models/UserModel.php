<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    public function getLoggedInUserData($resident_id)
    {

        $query = $this->db->table('tbl_resident')->select('*');
        $query->join('tbl_purok', 'tbl_resident.purok_id = tbl_purok.purok_id');
        $query->join('tbl_household', 'tbl_resident.household_id = tbl_household.household_id');
        $query->where('resident_id', $resident_id);
        $result = $query->get()->getResult();

        return $result;
    }
}
