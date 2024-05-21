<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    public function getLoggedInUserData($id)
    {
        $query = $this->db->table('tbl_resident')->select('*');
        $query->join('tbl_purok', 'tbl_resident.purok_id = tbl_purok.purok_id');
        $query->join('tbl_household', 'tbl_resident.household_id = tbl_household.household_id');
        $query->where('resident_id', $id);
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

    public function getPassword($resident_id, $usertype)
    {
        $query = $this->db->table('tbl_user');
        $query->where('resident_id', $resident_id)->where('usertype', $usertype);
        $result = $query->get()->getRow(); // Changed getResult() to getRow()

        return $result; // Return the row directly, no need for count()
    }


    public function updatePassword($newpass, $id, $usertype)
    {
        $this->db->table('tbl_user')
            ->where('resident_id', $id)
            ->where('usertype', $usertype)
            ->update(['password' => $newpass]);

        if ($this->db->affectedRows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function updateImage($path, $id)
    {
        $this->db->table('tbl_resident')
            ->where('resident_id', $id)
            ->update(['image' => $path]);

        if ($this->db->affectedRows() >= 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getAssistance($id)
    {
        $builder = $this->db->table('tbl_assistance ass')
            ->join('tbl_type_assistance type', 'ass.type_assistance_id = type.type_assistance_id')
            ->where('ass.resident_id', $id);
        $result = $builder->get()->getResult();

        if (count($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getNotification($id)
    {
        $builder = $this->db->table('tbl_notif_user notif')
            ->join('tbl_certificate cert', 'notif.certificate_id = cert.certificate_id')
            ->join('tbl_resident res', 'notif.admin_id = res.resident_id')
            ->where('notif.resident_id', $id);
        $result = $builder->get()->getResult();

        if ($result) {
            return $result;
        } else {
            return [];
        }
    }


    public function adminNotification()
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
}
