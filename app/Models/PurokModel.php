<?php

namespace App\Models;

use CodeIgniter\Model;

class PurokModel extends Model
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

    public function getNotification()
    {
        $builder = $this->db->table('tbl_notification notif')
            ->join('tbl_resident res', 'notif.resident_id = res.resident_id')
            ->join('tbl_certificate cert', 'notif.doc_type = cert.certificate_id')
            ->groupBy('notif.notif_id', 'DESC');
        $result = $builder->get()->getResult();

        if ($result) {
            return $result;
        } else {
            return [];
        }
    }

    public function purokUno()
    {
        $query = $this->db->table('tbl_resident');
        $builder = $query->selectCount('purok_id')->where('purok_id', '1');
        $result = $builder->countAllResults();

        if ($result > 0) {
            return $result;
        } else {
            return 0;
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
            return 0;
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
            return 0;
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
            return 0;
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
            return 0;
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
            return 0;
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
            return 0;
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
            return 0;
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
            return 0;
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
            return 0;
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
            return 0;
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
            return 0;
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
            return 0;
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
            return 0;
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
