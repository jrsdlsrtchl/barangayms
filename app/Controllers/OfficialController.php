<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\OfficialModel;

class OfficialController extends Controller
{
    public $official_model;
    public function __construct()
    {
        helper('form');
        $this->official_model = new OfficialModel();
    }

    public function official()
    {
        $data['official'] = $this->official_model->getOfficial();

        return view("official/official", $data);
    }

    public function addOfficial()
    {
        $data = [];
        $data['resident'] = $this->official_model->getResidents();
        $data['purok'] = $this->official_model->getPurok();

        $session = \CodeIgniter\Config\Services::session();

        if ($this->request->getMethod() == 'post') {
            $uniid = md5(str_shuffle('abcsefghijklmonpqrtuvwxyz' . time()));
            $res_data = [
                'resident_id' => $this->request->getVar('resident_id'),
                'purok_id' => $this->request->getVar('purok_id'),
                'committee' => $this->request->getVar('committee'),
                'vice_committee' => $this->request->getVar('vice_committee'),
                'position' => $this->request->getVar('position'),
                'term' => $this->request->getVar('term'),
                'status' => $this->request->getVar('status'),
                'off_uniid' => $uniid,

            ];

            $status = $this->official_model->addOfficial($res_data);

            if ($status) {
                $session->setTempdata('success', 'Brgy. Official Added Successfully!', 3);
                return redirect()->to(base_url() . "officialcontroller/official");
            } else {
                $session->setTempdata('error', 'Something went wrong! Try Again!', 3);
                return redirect()->to(base_url() . "officialcontroller/official");
            }
        }

        return view("official/add_official", $data);
    }

    public function editOfficial($id)
    {
        $data = [];
        $data['official'] = $this->official_model->getOfficialsID($id);
        $data['resident'] = $this->official_model->getResidents();
        $data['purok'] = $this->official_model->getPurok();

        $session = \CodeIgniter\Config\Services::session();

        if ($this->request->getMethod() == 'post') {
            $res_data = [
                'resident_id' => $this->request->getVar('resident_id'),
                'purok_id' => $this->request->getVar('purok_id'),
                'committee' => $this->request->getVar('committee'),
                'vice_committee' => $this->request->getVar('vice_committee'),
                'position' => $this->request->getVar('position'),
                'term' => $this->request->getVar('term'),
                'status' => $this->request->getVar('status')
            ];

            $status = $this->official_model->editOfficial($res_data, $id);

            if ($status) {
                $session->setTempdata('success', 'Brgy. Official Edited Successfully!', 3);
                return redirect()->to(base_url() . "officialcontroller/official");
            } else {
                $session->setTempdata('error', 'Something went wrong! Try Again!', 3);
                return redirect()->to(base_url() . "officialcontroller/official");
            }
        }

        return view("official/edit_official", $data);
    }

    public function deleteOfficial($id)
    {
        $session = \CodeIgniter\Config\Services::session();
        $delete = $this->official_model->deleteOfficial($id);

        if (!$delete) {
            $session->setTempdata('success', 'Brgy. Official Deleted Successfully!', 3);
            return redirect()->to(base_url() . "officialcontroller/official");
        } else {
            $session->setTempdata('error', 'Was not Deleted!', 3);
            return redirect()->to(base_url() . "officialcontroller/official");
        }
    }
}
