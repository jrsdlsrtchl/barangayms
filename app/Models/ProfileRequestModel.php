<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileRequestModel extends Model
{
    public function getRequest()
    {
        $builder = $this->db->table('tbl_resident_store resto');
        $builder->select('resto.*, res.firstname as resfirstname, res.middlename as resmiddlename, res.lastname as reslastname');
        $builder->join('tbl_resident res', 'resto.resident_id = res.resident_id');
        $builder->orderBy('resident_id_store', 'ASC');

        $result = $builder->get()->getResult();

        return $result;
    }


    public function editProfile($id)
    {
        $builder = $this->db->table('tbl_resident_store store');
        $builder->select('store.*');
        $builder->join('tbl_purok purok', 'store.purok_id = purok.purok_id', 'left');
        $builder->join('tbl_household house', 'store.household_id = house.household_id', 'left');
        $builder->where('store.resident_id_store', $id);
        $result = $builder->get()->getResult();

        return $result;
    }

    public function updateProfile($data, $id)
    {
        $builder = $this->db->table('tbl_resident');

        if (!empty($data['lastname'])) {
            $builder->set('lastname', $data['lastname']);
        }

        if (!empty($data['firstname'])) {
            $builder->set('firstname', $data['firstname']);
        }

        if (!empty($data['middlename'])) {
            $builder->set('middlename', $data['middlename']);
        }

        if (!empty($data['suffix'])) {
            $builder->set('suffix', $data['suffix']);
        }

        if (!empty($data['gender'])) {
            $builder->set('gender', $data['gender']);
        }

        if (!empty($data['age'])) {
            $builder->set('age', $data['age']);
        }

        if (!empty($data['datebirth'])) {
            $builder->set('datebirth', $data['datebirth']);
        }

        if (!empty($data['placebirth'])) {
            $builder->set('placebirth', $data['placebirth']);
        }

        if (!empty($data['civilstatus'])) {
            $builder->set('civilstatus', $data['civilstatus']);
        }

        if (!empty($data['ethnicity'])) {
            $builder->set('ethnicity', $data['ethnicity']);
        }

        if (!empty($data['occupation'])) {
            $builder->set('occupation', $data['occupation']);
        }

        if (!empty($data['citizenship'])) {
            $builder->set('citizenship', $data['citizenship']);
        }

        if (!empty($data['education'])) {
            $builder->set('education', $data['education']);
        }

        if (!empty($data['religion'])) {
            $builder->set('religion', $data['religion']);
        }

        if (!empty($data['mobile'])) {
            $builder->set('mobile', $data['mobile']);
        }

        if (!empty($data['for4ps'])) {
            $builder->set('for4ps', $data['for4ps']);
        }

        if (!empty($data['pwd'])) {
            $builder->set('pwd', $data['pwd']);
        }

        if (!empty($data['senior'])) {
            $builder->set('senior', $data['senior']);
        }

        if (!empty($data['precinct'])) {
            $builder->set('precinct', $data['precinct']);
        }

        if (!empty($data['purok_id'])) {
            $builder->set('purok_id', $data['purok_id']);
        }

        if (!empty($data['household_id'])) {
            $builder->set('household_id', $data['household_id']);
        }

        $builder->where('resident_id', $id);

        $builder->update();

        if ($this->db->affectedRows() > 0) {
            return true;
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

    public function updateStatus($data_status, $store_id)
    {
        $builder = $this->db->table('tbl_resident_store')->where('resident_id_store', $store_id);
        $builder->update($data_status);

        if ($this->db->affectedRows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteRequest($id)
    {
        $builder = $this->db->table('tbl_resident_store');
        $builder->delete(['resident_id_store' => $id]);
    }
}
