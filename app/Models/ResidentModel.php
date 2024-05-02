<?php

namespace App\Models;

use CodeIgniter\Model;

class ResidentModel extends Model
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

    public function getResidentsProfile($id)
    {
        if ($id === null) {
            return [];
        }

        $builder = $this->db->table('tbl_resident');
        $builder->join('tbl_purok', 'tbl_resident.purok_id = tbl_purok.purok_id');
        $builder->join('tbl_household', 'tbl_resident.household_id = tbl_household.household_id');
        $builder->where('tbl_resident.resident_id', $id);
        $result = $builder->get()->getResult();

        if ($result !== false && !empty($result)) {
            return $result;
        } else {
            return [];
        }
    }


    public function getAssistance($id)
    {
        $builder = $this->db->table('tbl_assistance ass');
        $builder->select('ass.resident_id, type.type_assistance');
        $builder->join('tbl_type_assistance type', 'ass.type_assistance_id = type.type_assistance_id');
        $builder->where('ass.resident_id', $id);
        $result = $builder->get()->getResult();

        if (!empty($result)) {
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
        $builder->delete(['resident_id' => $id]);
    }

    public function deleteUser($id)
    {
        $builder = $this->db->table('tbl_user');
        $builder->delete(['resident_id' => $id]);
    }
}
