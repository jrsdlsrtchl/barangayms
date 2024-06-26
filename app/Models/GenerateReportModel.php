<?php

namespace App\Models;

use CodeIgniter\Model;

class GenerateReportModel extends Model
{
    public function getLoggedInUserData($resident_id)
    {
        $query = $this->db->table('tbl_resident')->select('*');
        $query->join('tbl_purok', 'tbl_resident.purok_id = tbl_purok.purok_id');
        $query->join('tbl_household', 'tbl_resident.household_id = tbl_household.household_id');
        $query->where('resident_id', $resident_id);
        $result = $query->get()->getResult();

        return $result;
    }

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

    public function report($filter)
    {
        $builder = $this->db->table('tbl_resident');
        $builder->join('tbl_purok', 'tbl_resident.purok_id = tbl_purok.purok_id');
        $builder->join('tbl_household', 'tbl_resident.household_id = tbl_household.household_id');

        if (!empty($filter['min_age']) && !empty($filter['max_age'])) {
            $builder->where('age >=', $filter['min_age'])
                ->where('age <=', $filter['max_age']);
        } elseif (!empty($filter['min_age'])) {
            $builder->where('age >=', $filter['min_age']);
        } elseif (!empty($filter['max_age'])) {
            $builder->where('age <=', $filter['max_age']);
        }

        if (!empty($filter['gender'])) {
            $builder->where('gender', $filter['gender']);
        }

        if (!empty($filter['civilstatus'])) {
            $builder->where('civilstatus', $filter['civilstatus']);
        }

        if (!empty($filter['religion'])) {
            $builder->where('religion', $filter['religion']);
        }

        if (!empty($filter['ethnicity'])) {
            $builder->where('ethnicity', $filter['ethnicity']);
        }

        if (!empty($filter['education'])) {
            $builder->where('education', $filter['education']);
        }

        if (!empty($filter['for4ps'])) {
            $builder->where('for4ps', $filter['for4ps']);
        }

        if (!empty($filter['pwd'])) {
            $builder->where('pwd', $filter['pwd']);
        }

        if (!empty($filter['senior'])) {
            $builder->where('senior', $filter['senior']);
        }

        if (!empty($filter['precinct'])) {
            $builder->where('precinct', $filter['precinct']);
        }

        if (!empty($filter['purok_id'])) {
            $builder->where('tbl_resident.purok_id', $filter['purok_id']);
        }

        if (!empty($filter['household_id'])) {
            $builder->where('tbl_resident.household_id', $filter['household_id']);
        }

        $builder->orderBy('lastname', 'ASC');

        $result = $builder->get()->getResult();

        if ($result) {
            return $result;
        } else {
            return [];
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

    public function getHousehold()
    {
        $builder = $this->db->table('tbl_household');
        $builder->select('*');
        $result = $builder->get()->getResult();
        if (count($result) >= 0) {
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
