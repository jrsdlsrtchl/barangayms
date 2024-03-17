<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AuthenticationModel;

class AuthenticationController extends Controller
{
    public $authenticate_model;
    public $session;
    public function __construct()
    {
        helper('form');
        $this->authenticate_model = new AuthenticationModel();
        $this->session = \Config\Services::session();
    }


    public function login()
    {

        $data['validation'] = null;
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Username is required',
                    ],
                ],

                'password' => [
                    'rules' => 'required|min_length[7]|max_length[15]',
                    'errors' => [
                        'required' => 'Password is required',
                        'min_length' => 'Password must contain 7 characters',
                        'max_length' => 'Password must not exceed 15 characters'
                    ],
                ],

                'usertype' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Please select user type',

                    ],
                ],
            ];

            if ($this->validate($rules)) {
                $username = $this->request->getVar('username');
                $password = $this->request->getVar('password');
                $usertype = $this->request->getVar('usertype');

                $userdata = $this->authenticate_model->verifyUsername($username);
                if ($userdata) {
                    if ($password == $userdata['password']) {
                        if ($usertype == 'Resident' && $usertype == $userdata['usertype']) {
                            // echo "Welcome Resident";
                            $this->session->set('logged_resident', $userdata['resident_id']);
                            return redirect()->to(base_url() . 'UserController/user');
                        } elseif ($usertype == 'Admin' && $usertype == $userdata['usertype']) {
                            echo "Welcome Admin";
                            // $this->session->set('logged_admin', $userdata['user_uniid']);
                            // return redirect()->to(base_url() . 'LoggedResidentController/loggedAdmin');
                        } else {
                            echo "Invalid usertype";
                            $this->session->setTempdata('error', 'Sorry, your usertype is invalid!', 3);
                            return redirect()->to(current_url());
                        }
                    } else {
                        $this->session->setTempdata('error', 'Sorry, your password in incorrect!', 3);
                        return redirect()->to(current_url());
                    }
                } else {
                    $this->session->setTempdata('error', 'Sorry, your username does not exist!', 3);
                    return redirect()->to(current_url());
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view("authentication/login", $data);
    }
}
