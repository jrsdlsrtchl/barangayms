<?php

namespace App\Models;

use CodeIgniter\Model;

class AssistanceModel extends Model
{
    public function assistance()
    {
        $builder = $this->db->table('tbl_assistance');
    }

    public function getCertType()
    {
        $builder = $this->db->table('tbl_type_assistance');
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

    public function getResidents()
    {
        $builder = $this->db->table('tbl_resident')->select('*');
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function addAssistance($data)
    {
        $this->db->table('tbl_assistance')->insert($data);
        if ($this->db->affectedRows() >= 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }
}
