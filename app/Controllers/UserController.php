<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class UserController extends Controller
{
    public $user_model;
    public $session;
    public function __construct()
    {
        helper('form');
        $this->user_model = new UserModel();
        $this->session = \Config\Services::session();
    }

    public function user()
    {
        $resident_id = session()->get('logged_resident');
        $data['userdata'] = $this->user_model->getLoggedInUserData($resident_id);
        $data['pending'] = $this->user_model->countPending($resident_id);
        $data['approved'] = $this->user_model->countApproved($resident_id);
        $data['cancelled'] = $this->user_model->countCancelled($resident_id);
        $data['profile'] = $this->user_model->countUpdateProfile($resident_id);

        $data['activity'] = $this->user_model->getLoginActivity($resident_id);

        return view("user/user_home", $data);
    }

    public function manageProfile()
    {
        $resident_id = session()->get('logged_resident');
        $data['userdata'] = $this->user_model->getLoggedInUserData($resident_id);
        $data['purok'] = $this->user_model->getPurok();
        $data['household'] = $this->user_model->getHousehold();

        return view("user/manage_profile", $data);
    }

    public function updateProfile($id)
    {

        $session = \CodeIgniter\Config\Services::session();

        if ($this->request->getMethod() == 'post') {
            $datebirth = $this->request->getVar('datebirth');
            $date = date('Y-m-d', strtotime($datebirth));
            $res_data = [
                'resident_id' => $id,
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

            $status = $this->user_model->updateProfile($res_data);

            if ($status) {
                $session->setTempdata('success', 'Update profile has been sent. The staff will review your inputted information!', 3);
                return redirect()->to(base_url() . "UserController/manageprofile");
            } else {
                $session->setTempdata('error', 'Something went wrong!', 3);
                return redirect()->to(base_url() . "UserController/manageprofile");
            }
        }

        return view("resident/add_resident");
    }
}
