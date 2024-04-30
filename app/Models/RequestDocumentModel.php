<?php

namespace App\Models;

use CodeIgniter\Model;

class RequestDocumentModel extends Model
{
    public function getRequest($resident_id)
    {
        $builder = $this->db->query("SELECT c.certificate_type, rc.date, rc.purpose, rc.request_status, rc.tracking_id
        FROM tbl_requested_cert rc
        JOIN tbl_certificate c
            ON rc.certificate_id = c.certificate_id
        WHERE (rc.request_status = 'Processing' OR rc.request_status = 'Pending')
        AND resident_id = '$resident_id';");
        $result = $builder->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getApproved($resident_id)
    {
        $builder = $this->db->table('tbl_requested_cert');
        $builder->join('tbl_certificate', 'tbl_requested_cert.certificate_id = tbl_certificate.certificate_id');
        $builder->where('resident_id', $resident_id)->where('request_status', 'Approved');
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getCancelled($resident_id)
    {
        $builder = $this->db->table('tbl_requested_cert');
        $builder->join('tbl_certificate', 'tbl_requested_cert.certificate_id = tbl_certificate.certificate_id');
        $builder->where('resident_id', $resident_id)->where('request_status', 'Cancelled');
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getDocType()
    {
        $builder = $this->db->table('tbl_certificate');
        $result = $builder->get()->getResult();

        return $result;
    }

    public function addRequest($data)
    {
        $this->db->table('tbl_requested_cert')->insert($data);
        if ($this->db->affectedRows() >= 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }

    public function notification($data)
    {
        $this->db->table('tbl_notification')->insert($data);
        if ($this->db->affectedRows() == 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }

    public function getImage($id)
    {
        $builder = $this->db->table('tbl_resident')
            ->select('image')
            ->where('resident_id', $id);
        return $builder->get()->getRow();
    }
}
