<?php

namespace App\Models;

use CodeIgniter\Model;

class GenerateReportModel extends Model
{
    public function report($filter)
    {
        $builder = $this->db->table('tbl_resident');
        $builder->join('tbl_purok', 'tbl_resident.purok_id = tbl_purok.purok_id');

        if (!empty($filter['gender'])) {
            $builder->where('gender', $filter['gender']);
        }

        if (!empty($filter['civilstatus'])) {
            $builder->where('civilstatus', $filter['civilstatus']);
        }

        if (!empty($filter['religion'])) {
            $builder->where('religion', $filter['religion']);
        }

        return $builder->get()->getResult();
    }
}
