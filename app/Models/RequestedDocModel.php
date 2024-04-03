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
        $builder = $this->db->table('tbl_requested_cert req');
        $builder->select('req.date, req.purpose, req.request_status, req.tracking_id, req.request_id, cert.certificate_type, 
              res.firstname, res.middlename, res.lastname, 
              res2.firstname as official_firstname, res2.middlename as official_middlename, res2.lastname as official_lastname');
        $builder->join('tbl_certificate cert', 'req.certificate_id = cert.certificate_id');
        $builder->join('tbl_resident res', 'req.resident_id = res.resident_id');
        $builder->join('tbl_official offi', 'req.official_id = offi.official_id');
        $builder->join('tbl_resident res2', 'offi.resident_id = res2.resident_id');
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
        $builder = $this->db->table('tbl_requested_cert req');
        $builder->select('req.date, req.purpose, req.request_status, req.tracking_id, req.request_id, cert.certificate_type, 
              res.firstname, res.middlename, res.lastname, 
              res2.firstname as official_firstname, res2.middlename as official_middlename, res2.lastname as official_lastname');
        $builder->join('tbl_certificate cert', 'req.certificate_id = cert.certificate_id');
        $builder->join('tbl_resident res', 'req.resident_id = res.resident_id');
        $builder->join('tbl_official offi', 'req.official_id = offi.official_id');
        $builder->join('tbl_resident res2', 'offi.resident_id = res2.resident_id');
        $builder->where('request_status', 'Cancelled');
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
}
