<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProfileRequestModel;

class ProfileRequestController extends Controller
{
    public $profile_model;
    public function __construct()
    {
        helper('form');
        $this->profile_model = new ProfileRequestModel();
    }

    public function getRequest()
    {
        $data['userdata'] = $this->profile_model->getRequest();

        return view("profile_request/profile_request", $data);
    }

    public function editProfile($id)
    {
        $data['resident'] = $this->profile_model->editProfile($id);
        $data['purok'] = $this->profile_model->getPurok();
        $data['household'] = $this->profile_model->getHousehold();

        return view("profile_request/edit_profile", $data);
    }

    public function updateProfile($id, $store_id)
    {
        $session = \CodeIgniter\Config\Services::session();

        if ($this->request->getMethod() == 'post') {
            $datebirth = $this->request->getVar('datebirth');
            $date = date('Y-m-d', strtotime($datebirth));
            $res_data = [
                'lastname' => $this->request->getVar('lastname'),
                'firstname' => $this->request->getVar('firstname'),
                'middlename' => $this->request->getVar('middlename'),
                'suffix' => $this->request->getVar('suffix'),
                'gender' => $this->request->getVar('gender'),
                'age' => $this->request->getVar('age'),
                'datebirth' => $date,
                'placebirth' => $this->request->getVar('placebirth'),
                'civilstatus' => $this->request->getVar('civilstatus'),
                'ethnicity' => $this->request->getVar('ethnicity'),
                'occupation' => $this->request->getVar('occupation'),
                'citizenship' => $this->request->getVar('citizenship'),
                'education' => $this->request->getVar('education'),
                'religion' => $this->request->getVar('religion'),
                'mobile' => $this->request->getVar('mobile'),
                'for4ps' => $this->request->getVar('for4ps'),
                'pwd' => $this->request->getVar('pwd'),
                'senior' => $this->request->getVar('senior'),
                'precinct' => $this->request->getVar('precinct'),
                'purok_id' => $this->request->getVar('purok_id'),
                'household_id' => $this->request->getVar('household_id'),
            ];

            $resident_status = 'Approved';
            $data_status = ['resident_status' => $resident_status];

            $chel = $this->profile_model->updateStatus($data_status, $store_id);

            $status = $this->profile_model->updateProfile($res_data, $id);

            if ($status || $chel) {
                $session->setTempdata('success', 'Profile udpated successfully!', 3);
                return redirect()->to(base_url() . "ProfileRequestController/getrequest");
            } else {
                $session->setTempdata('error', 'Something went wrong!', 3);
                return redirect()->to(base_url() . "ProfileRequestController/getrequest");
            }
        }
    }
}
