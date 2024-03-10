<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class UserController extends Controller
{
    public $user_model;
    public function __construct()
    {
        helper('form');
        $this->user_model = new UserModel();
    }

    public function addUserAccount()
    {
        $data = [];
       
        $session = \CodeIgniter\Config\Services::session();

        if ($this->request->getMethod() == 'post') {

            $rules = [
                'username' => 'is_unique[tbl_user.username]'
            ];

            if ($this->validate($rules)) {
                $res_data = [
                    'resident_id' => $this->request->getVar('resident_id'),
                    'username' => $this->request->getVar('username'),
                    'password' => $this->request->getVar('password'),
                    'usertype' => $this->request->getVar('usertype'),
                ];

                $status = $this->user_model->addUserAccount($res_data);

                if ($status) {
                    $session->setTempdata('success', 'Account Created Successfully!', 3);
                    return redirect()->to(base_url() . "residentcontroller/resident");
                } else {
                    $session->setTempdata('error', 'Something went wrong! Try Again!', 3);
                    return redirect()->to(base_url() . "residentcontroller/resident");
                }
            } else {
                $session->setTempdata('error', 'Account already exist!', 3);
                return redirect()->to(base_url() . "residentcontroller/resident");
            }
        }

        return view("resident/add_resident", $data);
    }

    public function insertdata()
    {
    }
}
