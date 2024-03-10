<?php

namespace App\Models;

use CodeIgniter\Model;

class OfficialModel extends Model
{
    public function getOfficial()
    {
        $builder = $this->db->table('tbl_official');
        $builder->join('tbl_resident', 'tbl_official.resident_id = tbl_resident.resident_id');
        $builder->join('tbl_purok', 'tbl_official.purok_id = tbl_purok.purok_id');
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function addOfficial($data)
    {
        $this->db->table('tbl_official')->insert($data);
        if ($this->db->affectedRows() >= 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }

    public function getOfficialsID($id)
    {
        $builder = $this->db->table('tbl_official')->where('off_uniid', $id);
        $result = $builder->get();

        if (count($result->getResult()) == 1) {
            return $result->getRow();
        } else {
            return false;
        }
    }

    public function editOfficial($data, $id)
    {
        $builder = $this->db->table('tbl_official')->where('off_uniid', $id);
        $builder->update($data);

        if ($this->db->affectedRows() > 0) {
            return true;
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

    public function deleteOfficial($id)
    {
        $builder = $this->db->table('tbl_official');
        $builder->delete(['off_uniid' => $id]);
    }
}
