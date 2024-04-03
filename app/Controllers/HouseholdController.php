<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\HouseholdModel;

class HouseholdController extends Controller
{
    public $household_model;
    public function __construct()
    {
        helper('form');
        $this->household_model = new HouseholdModel();
    }

    public function household($puroknum)
    {
        $data['household'] = $this->household_model->household($puroknum);
        $data['purok'] = $this->household_model->getPurok($puroknum);
        $data['selectpurok'] = $this->household_model->selectPurok();

        return view("household/household", $data);
    }

    public function addHousehold()
    {
        $data = [];
        $session = \CodeIgniter\Config\Services::session();

        if ($this->request->getMethod() == 'post') {
            $HHdata = [
                'household_desc' => $this->request->getVar('household_desc'),
                'purok_id' => $this->request->getVar('purok_id'),
            ];

            $status = $this->household_model->addHousehold($HHdata);

            if ($status) {
                $session->setTempdata('success', 'Household Added Successfully!', 3);
                return redirect()->to(base_url() . "householdcontroller/household/1");
            } else {
                $session->setTempdata('error', 'Something went wrong! Try Again!', 3);
                return redirect()->to(base_url() . "householdcontroller/household/1");
            }
        }
        return view("household/household", $data);
    }

    public function gethouseholdmembers($id)
    {
        $data['resident'] = $this->household_model->getHouseholdMembers($id);
        $data['householdhead'] = $this->household_model->getHouseholdheadName($id);

        return view("household/view_household", $data);
    }

    public function deleteHousehold($id)
    {
        $session = \CodeIgniter\Config\Services::session();
        $delete = $this->household_model->deleteHousehold($id);

        if (!$delete) {
            $session->setTempdata('success', 'Household Deleted Successfully!', 3);
            return redirect()->to(base_url() . "HouseholdController/household/1");
        } else {
            $session->setTempdata('error', 'Something went wrong!', 3);
            return redirect()->to(base_url() . "HouseholdController/household/1");
        }
    }
}
