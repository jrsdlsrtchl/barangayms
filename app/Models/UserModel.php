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

    public function countPending($resident_id)
    {
        $builder = $this->db->table('tbl_requested_cert');
        $builder->selectCount('tbl_requested_cert');
        $builder->where('request_status', 'Pending');
        $builder->where('resident_id', $resident_id);
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return 0;
        }
    }

    public function countApproved($resident_id)
    {
        $builder = $this->db->table('tbl_requested_cert');
        $builder->selectCount('tbl_requested_cert');
        $builder->where('request_status', 'Approved');
        $builder->where('resident_id', $resident_id);
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return 0;
        }
    }

    public function countCancelled($resident_id)
    {
        $builder = $this->db->table('tbl_requested_cert');
        $builder->selectCount('tbl_requested_cert');
        $builder->where('request_status', 'Cancelled');
        $builder->where('resident_id', $resident_id);
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return 0;
        }
    }

    public function countUpdateProfile($resident_id)
    {
        $builder = $this->db->table('tbl_resident_store');
        $builder->selectCount('tbl_resident_store');
        $builder->where('resident_status', 'Pending');
        $builder->where('resident_id', $resident_id);
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return 0;
        }
    }

    public function updateProfile($data)
    {
        $this->db->table('tbl_resident_store')->insert($data);
        if ($this->db->affectedRows() >= 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }

    public function getPurok()
    {
        $builder = $this->db->table('tbl_purok');
        $builder->select('*');
        $result = $builder->get()->getResult();
        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getHousehold()
    {
        $builder = $this->db->table('tbl_household');
        $builder->select('*');
        $result = $builder->get()->getResult();
        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getLoginActivity($id)
    {
        $builder = $this->db->table('tbl_activity');
        $builder->where('resident_id', $id);
        $builder->orderBy('activity_id', 'DESC');
        $builder->limit(10);
        $result = $builder->get()->getResult();

        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }
}
