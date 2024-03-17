<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class UserController extends Controller
{
    public $user_model;
    public function __construct()
    {
        $this->user_model = new UserModel();
    }

    public function user()
    {
        $data['resident'] = $this->user_model->getUser();

        return view("user/user_home", $data);
    }
}
