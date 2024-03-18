<?php

namespace App\Models;

use CodeIgniter\Model;

class RequestDocumentModel extends Model
{
    public function getRequest($resident_id)
    {
        $builder = $this->db->table('tbl_requested_cert');
        $builder->join('tbl_certificate', 'tbl_requested_cert.certificate_id = tbl_certificate.certificate_id');
        $builder->where('resident_id', $resident_id)->where('status', 'Pending')->orWhere('status', 'Processing');
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

    public function gethistory($resident_id)
    {
        $builder = $this->db->table('tbl_requested_cert');
        $builder->join('tbl_certificate', 'tbl_requested_cert.certificate_id = tbl_certificate.certificate_id');
        $builder->where('resident_id', $resident_id)->where('status', 'Ready to Get')->orWhere('status', 'Cancelled');
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }
}
