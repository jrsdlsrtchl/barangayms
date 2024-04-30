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

    public function printOfficial()
    {
        $query = $this->db->query('SELECT *
                                    FROM tbl_official off
                                    JOIN tbl_resident res
                                        ON off.resident_id = res.resident_id
                                    ORDER BY
                                        CASE 
                                            WHEN position = "Captain" THEN 1
                                            WHEN position = "Councilor-1" THEN 2
                                            WHEN position = "Councilor-2" THEN 3
                                            WHEN position = "Councilor-3" THEN 4
                                            WHEN position = "Councilor-4" THEN 5
                                            WHEN position = "Councilor-5" THEN 6
                                            WHEN position = "Councilor-6" THEN 7
                                            WHEN position = "Councilor-7" THEN 8
                                            ELSE 4
                                        END');

        $result = $query->getResult();

        if (!empty($result)) {
            return $result;
        } else {
            return false;
        }
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
}
