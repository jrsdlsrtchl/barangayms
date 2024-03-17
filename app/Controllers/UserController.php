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
        $this->user_model = new UserModel();
        $this->session = \Config\Services::session();
    }

    public function user()
    {
        $resident_id = session()->get('logged_resident');
        $data['userdata'] = $this->user_model->getLoggedInUserData($resident_id);

        return view("user/user_home", $data);
    }

    public function logoutUser()
    {
        session()->remove('logged_resident');
        session()->destroy();

        return redirect()->to(base_url() . 'AuthenticationController/login');
    }
}
