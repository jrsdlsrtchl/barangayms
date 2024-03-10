<?php

namespace App\Models;

use CodeIgniter\Model;

class ResidentModel extends Model
{
    public function getResidents()
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

    public function addResident($data)
    {
        $this->db->table('tbl_resident')->insert($data);
        if ($this->db->affectedRows() >= 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }

    public function getResidentsID($id)
    {
        $builder = $this->db->table('tbl_resident')->where('uniid', $id);
        $result = $builder->get();

        if (count($result->getResult()) == 1) {
            return $result->getRow();
        } else {
            return false;
        }
    }

    public function editResident($data, $id)
    {
        $builder = $this->db->table('tbl_resident')->where('uniid', $id);
        $builder->update($data);

        if ($this->db->affectedRows() > 0) {
            return true;
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

    public function deleteResident($id)
    {
        $builder = $this->db->table('tbl_resident');
        $builder->delete(['uniid' => $id]);
    }
}
