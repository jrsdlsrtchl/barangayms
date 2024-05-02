<?php

namespace App\Models;

use CodeIgniter\Model;

class HouseholdModel extends Model
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
