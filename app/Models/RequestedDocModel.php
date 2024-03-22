<?php

namespace App\Models;

use CodeIgniter\Model;

class RequestedDocModel extends Model
{
    public function getRequest()
    {
        $builder = $this->db->table('tbl_requested_cert');
        $builder->join('tbl_resident', 'tbl_requested_cert.resident_id = tbl_resident.resident_id');
        $builder->join('tbl_certificate', 'tbl_requested_cert.certificate_id = tbl_certificate.certificate_id');
        $builder->where('request_status', 'Pending')->orWhere('request_status', 'Processing');
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getApproved()
    {
        $builder = $this->db->table('tbl_requested_cert');
        $builder->join('tbl_resident', 'tbl_requested_cert.resident_id = tbl_resident.resident_id');
        $builder->join('tbl_certificate', 'tbl_requested_cert.certificate_id = tbl_certificate.certificate_id');
        $builder->where('request_status', 'Approved');
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getCancelled()
    {
        $builder = $this->db->table('tbl_requested_cert');
        $builder->join('tbl_resident', 'tbl_requested_cert.resident_id = tbl_resident.resident_id');
        $builder->join('tbl_certificate', 'tbl_requested_cert.certificate_id = tbl_certificate.certificate_id');
        $builder->where('request_status', 'Cancelled');
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getHistory()
    {
        $builder = $this->db->table('tbl_requested_cert');
        $builder->join('tbl_certificate', 'tbl_requested_cert.certificate_id = tbl_certificate.certificate_id');
        $builder->join('tbl_resident', 'tbl_requested_cert.resident_id = tbl_resident.resident_id');
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
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

    public function deleteRequest($request_id)
    {
        $builder = $this->db->table('tbl_requested_cert');
        $builder->delete(['request_id' => $request_id]);
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
}
