<?php

namespace App\Models;

use CodeIgniter\Model;

class AssistanceModel extends Model
{
    public function assistance()
    {
        $builder = $this->db->table('tbl_assistance ta');
        $builder->select('ty.type_assistance, ta.date_receive, res.lastname, ta.official_id, ta.distribute_date, ty.type_assistance_id');
        $builder->join('tbl_type_assistance ty', 'ta.type_assistance_id = ty.type_assistance_id');
        $builder->join('tbl_resident res', 'ta.resident_id = res.resident_id');
        $builder->groupBy('ty.type_assistance_id');

        $result = $builder->get()->getResult();

        return $result;
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

    public function addTypeAssistance($ass_data)
    {
        $this->db->table('tbl_type_assistance')->insert($ass_data);
        if ($this->db->affectedRows() >= 1) {
            return $this->db->insertID();
        } else {
            return false;
        }
    }

    public function editTypeAssistance($ass_data, $id)
    {
        $builder = $this->db->table('tbl_type_assistance');
        $builder->where('type_assistance_id', $id);
        $builder->update($ass_data);

        if ($this->db->affectedRows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteTypeAssistance($id)
    {
        $builder = $this->db->table('tbl_type_assistance');
        $builder->where('type_assistance_id', $id);
        $builder->delete();
    }

    public function getAssResidents($id)
    {
        $builder = $this->db->table('tbl_assistance ass');
        $builder->select('res.firstname, res.lastname, res.middlename, res.gender, res.age, res.mobile, res.datebirth, house.household_desc, pur.purok_desc');
        $builder->join('tbl_type_assistance typ', 'ass.type_assistance_id = typ.type_assistance_id');
        $builder->join('tbl_resident res', 'ass.resident_id = res.resident_id');
        $builder->join('tbl_household house', 'res.household_id = house.household_id');
        $builder->join('tbl_purok pur', 'res.purok_id = pur.purok_id');
        $builder->where('typ.type_assistance_id', $id);
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getAssName($id)
    {
        $builder = $this->db->table('tbl_type_assistance');
        $builder->where('type_assistance_id', $id);
        $result = $builder->get()->getResult();

        if (count($result) >= 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function deleteAssistance($id)
    {
        $builder = $this->db->table('tbl_assistance');
        $builder->where('type_assistance_id', $id);
        $builder->delete();
    }
}
