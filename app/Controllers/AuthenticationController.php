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

                            $loginInfo = [
                                'resident_id' =>  $userdata['resident_id'],
                                'browser' => $this->getUserAgentInfo(),
                                'ip_address' => $this->request->getIPAddress(),
                                'login_time' => date('Y-m-d h:i:s'),
                            ];
                            $login_id = $this->authenticate_model->saveLoginInfo($loginInfo);

                            if ($login_id) {
                                $this->session->set('logged_info', $login_id);
                            }

                            $this->session->set('logged_resident', $userdata['resident_id']);
                            return redirect()->to(base_url() . 'UserController/user');
                        } elseif ($usertype == 'Admin' && $usertype == $userdata['usertype']) {
                            $this->session->set('logged_admin', $userdata['resident_id']);
                            return redirect()->to(base_url() . 'DashboardController/dashboard');
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

    public function getUserAgentInfo()
    {
        $agent = $this->request->getUserAgent();
        if ($agent->isBrowser()) {
            $currentAgent = $agent->getBrowser();
        } elseif ($agent->isRobot()) {
            $currentAgent = $agent->robot();
        } elseif ($agent->isMobile()) {
            $currentAgent = $agent->getMobile();
        } else {
            $currentAgent = 'Unidentified User Browser!';
        }
        return $currentAgent;
    }


    public function logoutUser()
    {
        if (session()->has('logged_info')) {
            $login_id = session()->get('logged_info');
            $this->authenticate_model->updateLogoutTime($login_id);
        }

        session()->remove('logged_resident');
        session()->destroy();

        return redirect()->to(base_url() . 'AuthenticationController/login');
    }

    public function logoutAdmin()
    {

        session()->remove('logged_admin');
        session()->destroy();

        return redirect()->to(base_url() . 'AuthenticationController/login');
    }
}
