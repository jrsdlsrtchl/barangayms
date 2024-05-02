<?php

namespace App\Models;

use CodeIgniter\Model;

class RequestedDocModel extends Model
{
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

    public function getLoggedInUserData($resident_id)
    {
        $query = $this->db->table('tbl_resident')->select('*');
        $query->join('tbl_purok', 'tbl_resident.purok_id = tbl_purok.purok_id');
        $query->join('tbl_household', 'tbl_resident.household_id = tbl_household.household_id');
        $query->where('resident_id', $resident_id);
        $result = $query->get()->getResult();

        return $result;
    }


    public function getRequest($id)
    {
        $builder = $this->db->table('tbl_requested_cert');
        $builder->join('tbl_resident', 'tbl_requested_cert.resident_id = tbl_resident.resident_id');
        $builder->join('tbl_certificate', 'tbl_requested_cert.certificate_id = tbl_certificate.certificate_id');
        $builder->where('tbl_certificate.certificate_id', $id);
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return [];
        }
    }

    public function getCert($id)
    {
        $builder = $this->db->table('tbl_certificate')->where('certificate_id', $id);
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function deleteRequest($id)
    {
        $builder = $this->db->table('tbl_requested_cert');
        $builder->delete(['request_id' => $id]);
    }

    public function getOfficial()
    {
        $builder = $this->db->table('tbl_official');
        $builder->join('tbl_resident', 'tbl_official.resident_id = tbl_resident.resident_id');
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function updateRequest($data, $request_id)
    {
        $builder = $this->db->table('tbl_requested_cert')->where('request_id', $request_id);
        $builder->update($data);

        if ($this->db->affectedRows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function document()
    {
        $builder = $this->db->table('tbl_certificate');
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function addDocument($data)
    {
        $this->db->table('tbl_certificate')->insert($data);
        if ($this->db->affectedRows() >= 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }

    public function deleteDocument($document_id)
    {
        $builder = $this->db->table('tbl_certificate');
        $builder->delete(['certificate_id' => $document_id]);
    }

    public function printRequest($id)
    {
        $builder = $this->db->table('tbl_requested_cert');
        $builder->join('tbl_resident', 'tbl_requested_cert.resident_id = tbl_resident.resident_id');
        $builder->where('tbl_requested_cert.request_id', $id);
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return [];
        }
    }

    public function getCaptain()
    {
        $builder = $this->db->table('tbl_official off');
        $builder->select('res.firstname, res.middlename, res.lastname');
        $builder->join('tbl_resident res', 'off.resident_id = res.resident_id');
        $builder->where('off.position', 'Captain');

        $result = $builder->get()->getResult();

        return $result;
    }

    public function getPrintedBy($id)
    {
        $builder = $this->db->table('tbl_user use')
            ->join('tbl_resident res', 'use.resident_id = res.resident_id')
            ->where('use.resident_id', $id);
        $result = $builder->get()->getResult();

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public function userNotifs($data)
    {
        $this->db->table('tbl_notif_user')->insert($data);
        if ($this->db->affectedRows() == 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }
}
