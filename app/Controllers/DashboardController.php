<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DashboardModel;

class DashboardController extends Controller
{
    public $dashboard_model;
    public function __construct()
    {
        $this->dashboard_model = new DashboardModel();
    }

    public function dashboard()
    {
        $data['population'] = $this->dashboard_model->population();
        $data['male'] = $this->dashboard_model->male();
        $data['female'] = $this->dashboard_model->female();
        $data['household'] = $this->dashboard_model->numhousehold();
        $data['senior'] = $this->dashboard_model->seniorcitizen();
        $data['pwd'] = $this->dashboard_model->pwd();
        $data['fourPs'] = $this->dashboard_model->for4ps();
        $data['voter'] = $this->dashboard_model->voter();

        return view("dashboard/dashboard", $data);
    }

    public function populationDash()
    {
        $data['title'] = 'Population Table Dashboard';
        $data['resident'] = $this->dashboard_model->populationDash();

        $data['population'] = $this->dashboard_model->population();
        $data['male'] = $this->dashboard_model->male();
        $data['female'] = $this->dashboard_model->female();
        $data['household'] = $this->dashboard_model->numhousehold();
        $data['senior'] = $this->dashboard_model->seniorcitizen();
        $data['pwd'] = $this->dashboard_model->pwd();
        $data['fourPs'] = $this->dashboard_model->for4ps();
        $data['voter'] = $this->dashboard_model->voter();

        return view("dashboard/table_dashboard", $data);
    }

    public function maleDash()
    {
        $data['title'] = 'Male Table Dashboard';
        $data['resident'] = $this->dashboard_model->maleDash();

        $data['population'] = $this->dashboard_model->population();
        $data['male'] = $this->dashboard_model->male();
        $data['female'] = $this->dashboard_model->female();
        $data['household'] = $this->dashboard_model->numhousehold();
        $data['senior'] = $this->dashboard_model->seniorcitizen();
        $data['pwd'] = $this->dashboard_model->pwd();
        $data['fourPs'] = $this->dashboard_model->for4ps();
        $data['voter'] = $this->dashboard_model->voter();

        return view("dashboard/table_dashboard", $data);
    }

    public function femaleDash()
    {
        $data['title'] = 'Female Table Dashboard';
        $data['resident'] = $this->dashboard_model->femaleDash();

        $data['population'] = $this->dashboard_model->population();
        $data['male'] = $this->dashboard_model->male();
        $data['female'] = $this->dashboard_model->female();
        $data['household'] = $this->dashboard_model->numhousehold();
        $data['senior'] = $this->dashboard_model->seniorcitizen();
        $data['pwd'] = $this->dashboard_model->pwd();
        $data['fourPs'] = $this->dashboard_model->for4ps();
        $data['voter'] = $this->dashboard_model->voter();

        return view("dashboard/table_dashboard", $data);
    }

    public function seniorDash()
    {
        $data['title'] = 'Senior Citizen Table Dashboard';
        $data['resident'] = $this->dashboard_model->seniorDash();

        $data['population'] = $this->dashboard_model->population();
        $data['male'] = $this->dashboard_model->male();
        $data['female'] = $this->dashboard_model->female();
        $data['household'] = $this->dashboard_model->numhousehold();
        $data['senior'] = $this->dashboard_model->seniorcitizen();
        $data['pwd'] = $this->dashboard_model->pwd();
        $data['fourPs'] = $this->dashboard_model->for4ps();
        $data['voter'] = $this->dashboard_model->voter();

        return view("dashboard/table_dashboard", $data);
    }

    public function pwdDash()
    {
        $data['title'] = 'PWD Table Dashboard';
        $data['resident'] = $this->dashboard_model->pwdDash();

        $data['population'] = $this->dashboard_model->population();
        $data['male'] = $this->dashboard_model->male();
        $data['female'] = $this->dashboard_model->female();
        $data['household'] = $this->dashboard_model->numhousehold();
        $data['senior'] = $this->dashboard_model->seniorcitizen();
        $data['pwd'] = $this->dashboard_model->pwd();
        $data['fourPs'] = $this->dashboard_model->for4ps();
        $data['voter'] = $this->dashboard_model->voter();

        return view("dashboard/table_dashboard", $data);
    }

    public function for4psDash()
    {
        $data['title'] = '4PS Table Dashboard';
        $data['resident'] = $this->dashboard_model->for4psDash();

        $data['population'] = $this->dashboard_model->population();
        $data['male'] = $this->dashboard_model->male();
        $data['female'] = $this->dashboard_model->female();
        $data['household'] = $this->dashboard_model->numhousehold();
        $data['senior'] = $this->dashboard_model->seniorcitizen();
        $data['pwd'] = $this->dashboard_model->pwd();
        $data['fourPs'] = $this->dashboard_model->for4ps();
        $data['voter'] = $this->dashboard_model->voter();

        return view("dashboard/table_dashboard", $data);
    }

    public function voterDash()
    {
        $data['title'] = 'Voters Table Dashboard';
        $data['resident'] = $this->dashboard_model->voterDash();

        $data['population'] = $this->dashboard_model->population();
        $data['male'] = $this->dashboard_model->male();
        $data['female'] = $this->dashboard_model->female();
        $data['household'] = $this->dashboard_model->numhousehold();
        $data['senior'] = $this->dashboard_model->seniorcitizen();
        $data['pwd'] = $this->dashboard_model->pwd();
        $data['fourPs'] = $this->dashboard_model->for4ps();
        $data['voter'] = $this->dashboard_model->voter();

        return view("dashboard/table_dashboard", $data);
    }
}
