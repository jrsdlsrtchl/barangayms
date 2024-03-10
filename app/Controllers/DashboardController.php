<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DashboardModel;

class DashboardController extends Controller
{
    public $household_model;
    public function __construct()
    {
        $this->household_model = new DashboardModel();
    }

    public function dashboard()
    {
        $data['population'] = $this->household_model->population();
        $data['male'] = $this->household_model->male();
        $data['female'] = $this->household_model->female();
        $data['household'] = $this->household_model->numhousehold();
        $data['senior'] = $this->household_model->seniorcitizen();
        $data['pwd'] = $this->household_model->pwd();
        $data['fourPs'] = $this->household_model->for4ps();
        $data['voter'] = $this->household_model->voter();

        return view("dashboard/dashboard", $data);
    }
}
