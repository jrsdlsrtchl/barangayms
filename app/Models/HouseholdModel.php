<?php

namespace App\Models;

use CodeIgniter\Model;

class HouseholdModel extends Model
{
    public function household($puroknum)
    {
        $query = $this->db->table('tbl_household');
        $builder = $query->where('purok_id', $puroknum);
        $result = $builder->get()->getResult();
        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getPurok($puroknum)
    {
        $builder = $this->db->table('tbl_purok')->select('*');
        $builder->where('purok_id', $puroknum);
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function selectPurok()
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

    public function addhousehold($data)
    {
        $this->db->table('tbl_household')->insert($data);
        if ($this->db->affectedRows() >= 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }

    public function getHouseholdMembers($id)
    {
        $builder = $this->db->table('tbl_resident');
        $builder->join('tbl_purok', 'tbl_resident.purok_id = tbl_purok.purok_id');
        $builder->join('tbl_household', 'tbl_resident.household_id = tbl_household.household_id');
        $builder->where('tbl_resident.household_id', $id);
        $result = $builder->get()->getResult();
        if ($result) {
            return $result;
        } else {
            return [];
        }
    }


    public function getHouseholdheadName($id)
    {
        $builder = $this->db->table('tbl_household');
        $builder->where('household_id', $id);
        $result = $builder->get()->getResult();
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function deleteHousehold($id)
    {
        $builder = $this->db->table('tbl_household');
        $builder->delete(['household_id' => $id]);
    }
}
