<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserManagementModel;

class UserManagementController extends Controller
{
    public $usermanage_model;
    public function __construct()
    {
        helper('form');
        $this->usermanage_model = new UserManagementModel();
    }

    public function user()
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $admin_id = session()->get('logged_admin');

        // Get Admin Information
        $data['userdata'] = $this->usermanage_model->getLoggedInUserData($admin_id);

        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        //Notification
        $data['notification'] = $this->usermanage_model->getNotification();

        $data['useraccount'] = $this->usermanage_model->getUser();

        return view("user_management/user_management", $data);
    }

    public function addUser()
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $data = [];

        $admin_id = session()->get('logged_admin');

        // Get Admin Information
        $data['userdata'] = $this->usermanage_model->getLoggedInUserData($admin_id);

        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        //Notification
        $data['notification'] = $this->usermanage_model->getNotification();

        $data['resident'] = $this->usermanage_model->getResident();

        $session = \CodeIgniter\Config\Services::session();

        if ($this->request->getMethod() == 'post') {

            $rules = [
                'username' => 'is_unique[tbl_user.username]'
            ];

            if ($this->validate($rules)) {
                $uniid = md5(str_shuffle('abcsefghijklmonpqrtuvwxyz' . time()));
                $res_data = [
                    'resident_id' => $this->request->getVar('resident_id'),
                    'username' => $this->request->getVar('username'),
                    'password' => $this->request->getVar('password'),
                    'usertype' => $this->request->getVar('usertype'),
                    'user_uniid' => $uniid,
                ];

                $status = $this->usermanage_model->addUserAccount($res_data);

                if ($status) {
                    $session->setTempdata('success', 'User Created Successfully!', 3);
                    return redirect()->to(base_url() . "UserManagementController/user");
                } else {
                    $session->setTempdata('error', 'Something went wrong! Try Again!', 3);
                    return redirect()->to(base_url() . "UserManagementController/user");
                }
            } else {
                $session->setTempdata('error', 'User already exist!', 3);
                return redirect()->to(base_url() . "UserManagementController/user");
            }
        }

        return view("user_management/add_user", $data);
    }

    public function deleteUser($id)
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $session = \CodeIgniter\Config\Services::session();
        $delete = $this->usermanage_model->deleteUser($id);

        if (!$delete) {
            $session->setTempdata('success', 'Deleted Successfully!', 3);
            return redirect()->to(base_url() . "UserManagementController/user");
        } else {
            $session->setTempdata('error', 'Was not Deleted!', 3);
            return redirect()->to(base_url() . "UserManagementController/user");
        }
    }
}
