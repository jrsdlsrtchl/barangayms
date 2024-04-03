<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{

    public function population()
    {
        $builder = $this->db->table('tbl_resident');
        $builder->selectCount('tbl_resident');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function populationDash()
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

    public function male()
    {
        $builder = $this->db->table('tbl_resident');
        $builder->selectCount('gender')->where('gender', 'Male');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function maleDash()
    {
        $builder = $this->db->table('tbl_resident');
        $builder->join('tbl_purok', 'tbl_resident.purok_id = tbl_purok.purok_id');
        $builder->join('tbl_household', 'tbl_resident.household_id = tbl_household.household_id');
        $builder->where('gender', 'Male');
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function female()
    {
        $builder = $this->db->table('tbl_resident');
        $builder->selectCount('gender')->where('gender', 'Female');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function femaleDash()
    {
        $builder = $this->db->table('tbl_resident');
        $builder->join('tbl_purok', 'tbl_resident.purok_id = tbl_purok.purok_id');
        $builder->join('tbl_household', 'tbl_resident.household_id = tbl_household.household_id');
        $builder->where('gender', 'Female');
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function numhousehold()
    {
        $builder = $this->db->table('tbl_household');
        $builder->selectCount('household_id');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function seniorcitizen()
    {
        $builder = $this->db->table('tbl_resident');
        $builder->selectCount('senior')->where('senior', 'Yes');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function seniorDash()
    {
        $builder = $this->db->table('tbl_resident');
        $builder->join('tbl_purok', 'tbl_resident.purok_id = tbl_purok.purok_id');
        $builder->join('tbl_household', 'tbl_resident.household_id = tbl_household.household_id');
        $builder->where('senior', 'Yes');
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function pwd()
    {
        $builder = $this->db->table('tbl_resident');
        $builder->selectCount('pwd')->where('pwd', 'Yes');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function pwdDash()
    {
        $builder = $this->db->table('tbl_resident');
        $builder->join('tbl_purok', 'tbl_resident.purok_id = tbl_purok.purok_id');
        $builder->join('tbl_household', 'tbl_resident.household_id = tbl_household.household_id');
        $builder->where('pwd', 'Yes');
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function for4ps()
    {
        $builder = $this->db->table('tbl_resident');
        $builder->selectCount('for4ps')->where('for4ps', 'Yes');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function for4psDash()
    {
        $builder = $this->db->table('tbl_resident');
        $builder->join('tbl_purok', 'tbl_resident.purok_id = tbl_purok.purok_id');
        $builder->join('tbl_household', 'tbl_resident.household_id = tbl_household.household_id');
        $builder->where('for4ps', 'Yes');
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function voter()
    {
        $builder = $this->db->query("SELECT COUNT(*)
        FROM tbl_resident
        WHERE precinct IS NOT NULL AND precinct != ''");
        $result = $builder->getRow();

        if ($result) {
            return $result->{'COUNT(*)'};
        } else {
            return false;
        }
    }

    public function voterDash()
    {
        $builder = $this->db->table('tbl_resident');
        $builder->join('tbl_purok', 'tbl_resident.purok_id = tbl_purok.purok_id');
        $builder->join('tbl_household', 'tbl_resident.household_id = tbl_household.household_id');
        $builder->where('precinct IS NOT NULL')->where('precinct != ""');
        $result = $builder->get()->getResult();

        return $result;
    }
}
