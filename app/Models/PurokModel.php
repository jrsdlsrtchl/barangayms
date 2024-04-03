<?php

namespace App\Models;

use CodeIgniter\Model;

class PurokModel extends Model
{

    public function purokUno()
    {
        $query = $this->db->table('tbl_resident');
        $builder = $query->selectCount('purok_id')->where('purok_id', '1');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function purokDos()
    {
        $query = $this->db->table('tbl_resident');
        $builder = $query->selectCount('purok_id')->where('purok_id', '2');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function purokTres()
    {
        $query = $this->db->table('tbl_resident');
        $builder = $query->selectCount('purok_id')->where('purok_id', '3');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function purokKwatro()
    {
        $query = $this->db->table('tbl_resident');
        $builder = $query->selectCount('purok_id')->where('purok_id', '4');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function purokSingko()
    {
        $query = $this->db->table('tbl_resident');
        $builder = $query->selectCount('purok_id')->where('purok_id', '5');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function purokSays()
    {
        $query = $this->db->table('tbl_resident');
        $builder = $query->selectCount('purok_id')->where('purok_id', '6');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function purokSyete()
    {
        $query = $this->db->table('tbl_resident');
        $builder = $query->selectCount('purok_id')->where('purok_id', '7');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function householdUno()
    {
        $query = $this->db->table('tbl_household');
        $builder = $query->selectCount('purok_id')->where('purok_id', '1');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function householdDos()
    {
        $query = $this->db->table('tbl_household');
        $builder = $query->selectCount('purok_id')->where('purok_id', '2');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function householdTres()
    {
        $query = $this->db->table('tbl_household');
        $builder = $query->selectCount('purok_id')->where('purok_id', '3');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function householdKwatro()
    {
        $query = $this->db->table('tbl_household');
        $builder = $query->selectCount('purok_id')->where('purok_id', '4');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function householdSingko()
    {
        $query = $this->db->table('tbl_household');
        $builder = $query->selectCount('purok_id')->where('purok_id', '5');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function householdSays()
    {
        $query = $this->db->table('tbl_household');
        $builder = $query->selectCount('puro_id')->where('purok_id', '6');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function householdSyete()
    {
        $query = $this->db->table('tbl_household');
        $builder = $query->selectCount('purok_id')->where('purok_id', '7');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function viewPurok($puroknumber)
    {
        $builder = $this->db->table('tbl_resident');
        $builder->join('tbl_purok', 'tbl_resident.purok_id = tbl_purok.purok_id');
        $builder->join('tbl_household', 'tbl_resident.household_id = tbl_household.household_id');
        $builder->where('tbl_resident.purok_id', $puroknumber);
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getPurok($puroknumber)
    {
        $builder = $this->db->table('tbl_purok')->select('*');
        $builder->where('purok_id', $puroknumber);
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }
}
