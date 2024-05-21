<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\DashboardModel;
use App\Models\RequestedDocModel;

class DashboardController extends Controller
{
    public $dashboard_model;
    public $notification;
    public function __construct()
    {
        $this->dashboard_model = new DashboardModel();
        $this->notification = new RequestedDocModel();
    }

    public function welcome()
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $admin_id = session()->get('logged_admin');

        // Get Admin Information
        $data['userdata'] = $this->dashboard_model->getLoggedInUserData($admin_id);

        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        //Notification
        $data['notification'] = $this->notification->getNotification();

        $data['population'] = $this->dashboard_model->population();
        $data['male'] = $this->dashboard_model->male();
        $data['female'] = $this->dashboard_model->female();
        $data['household'] = $this->dashboard_model->numhousehold();
        $data['senior'] = $this->dashboard_model->seniorcitizen();
        $data['pwd'] = $this->dashboard_model->pwd();
        $data['fourPs'] = $this->dashboard_model->for4ps();
        $data['voter'] = $this->dashboard_model->voter();
        $data['pending'] = $this->dashboard_model->countPending();
        $data['approved'] = $this->dashboard_model->countApproved();
        $data['cancelled'] = $this->dashboard_model->countCancelled();
        $data['profile'] = $this->dashboard_model->countUpdateProfile();
        $data['documents'] = $this->dashboard_model->countDocuments();
        $data['assistance'] = $this->dashboard_model->countAssistance();
        $data['active'] = $this->dashboard_model->countActiveAssistance();

        return view("dashboard/welcome_dash", $data);
    }

    public function dashboard()
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $admin_id = session()->get('logged_admin');

        // Get Admin Information
        $data['userdata'] = $this->dashboard_model->getLoggedInUserData($admin_id);

        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        //Notification
        $data['notification'] = $this->notification->getNotification();

        $data['population'] = $this->dashboard_model->population();
        $data['male'] = $this->dashboard_model->male();
        $data['female'] = $this->dashboard_model->female();
        $data['household'] = $this->dashboard_model->numhousehold();
        $data['senior'] = $this->dashboard_model->seniorcitizen();
        $data['pwd'] = $this->dashboard_model->pwd();
        $data['fourPs'] = $this->dashboard_model->for4ps();
        $data['voter'] = $this->dashboard_model->voter();
        $data['pending'] = $this->dashboard_model->countPending();
        $data['approved'] = $this->dashboard_model->countApproved();
        $data['cancelled'] = $this->dashboard_model->countCancelled();
        $data['profile'] = $this->dashboard_model->countUpdateProfile();
        $data['documents'] = $this->dashboard_model->countDocuments();
        $data['assistance'] = $this->dashboard_model->countAssistance();
        $data['active'] = $this->dashboard_model->countActiveAssistance();

        return view("dashboard/dashboard", $data);
    }

    public function populationDash()
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $admin_id = session()->get('logged_admin');

        // Get Admin Information
        $data['userdata'] = $this->dashboard_model->getLoggedInUserData($admin_id);

        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        //Notification
        $data['notification'] = $this->notification->getNotification();

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
        $data['pending'] = $this->dashboard_model->countPending();
        $data['approved'] = $this->dashboard_model->countApproved();
        $data['cancelled'] = $this->dashboard_model->countCancelled();
        $data['profile'] = $this->dashboard_model->countUpdateProfile();
        $data['documents'] = $this->dashboard_model->countDocuments();
        $data['assistance'] = $this->dashboard_model->countAssistance();
        $data['active'] = $this->dashboard_model->countActiveAssistance();

        return view("dashboard/table_dashboard", $data);
    }

    public function maleDash()
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $admin_id = session()->get('logged_admin');

        // Get Admin Information
        $data['userdata'] = $this->dashboard_model->getLoggedInUserData($admin_id);

        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        //Notification
        $data['notification'] = $this->notification->getNotification();

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
        $data['pending'] = $this->dashboard_model->countPending();
        $data['approved'] = $this->dashboard_model->countApproved();
        $data['cancelled'] = $this->dashboard_model->countCancelled();
        $data['profile'] = $this->dashboard_model->countUpdateProfile();
        $data['documents'] = $this->dashboard_model->countDocuments();
        $data['assistance'] = $this->dashboard_model->countAssistance();
        $data['active'] = $this->dashboard_model->countActiveAssistance();

        return view("dashboard/table_dashboard", $data);
    }

    public function femaleDash()
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $admin_id = session()->get('logged_admin');

        // Get Admin Information
        $data['userdata'] = $this->dashboard_model->getLoggedInUserData($admin_id);

        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        //Notification
        $data['notification'] = $this->notification->getNotification();

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
        $data['pending'] = $this->dashboard_model->countPending();
        $data['approved'] = $this->dashboard_model->countApproved();
        $data['cancelled'] = $this->dashboard_model->countCancelled();
        $data['profile'] = $this->dashboard_model->countUpdateProfile();
        $data['documents'] = $this->dashboard_model->countDocuments();
        $data['assistance'] = $this->dashboard_model->countAssistance();
        $data['active'] = $this->dashboard_model->countActiveAssistance();

        return view("dashboard/table_dashboard", $data);
    }

    public function seniorDash()
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $admin_id = session()->get('logged_admin');

        // Get Admin Information
        $data['userdata'] = $this->dashboard_model->getLoggedInUserData($admin_id);

        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        //Notification
        $data['notification'] = $this->notification->getNotification();

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
        $data['pending'] = $this->dashboard_model->countPending();
        $data['approved'] = $this->dashboard_model->countApproved();
        $data['cancelled'] = $this->dashboard_model->countCancelled();
        $data['profile'] = $this->dashboard_model->countUpdateProfile();
        $data['documents'] = $this->dashboard_model->countDocuments();
        $data['assistance'] = $this->dashboard_model->countAssistance();
        $data['active'] = $this->dashboard_model->countActiveAssistance();

        return view("dashboard/table_dashboard", $data);
    }

    public function pwdDash()
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $admin_id = session()->get('logged_admin');

        // Get Admin Information
        $data['userdata'] = $this->dashboard_model->getLoggedInUserData($admin_id);

        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        //Notification
        $data['notification'] = $this->notification->getNotification();

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
        $data['pending'] = $this->dashboard_model->countPending();
        $data['approved'] = $this->dashboard_model->countApproved();
        $data['cancelled'] = $this->dashboard_model->countCancelled();
        $data['profile'] = $this->dashboard_model->countUpdateProfile();
        $data['documents'] = $this->dashboard_model->countDocuments();
        $data['assistance'] = $this->dashboard_model->countAssistance();
        $data['active'] = $this->dashboard_model->countActiveAssistance();

        return view("dashboard/table_dashboard", $data);
    }

    public function for4psDash()
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $admin_id = session()->get('logged_admin');

        // Get Admin Information
        $data['userdata'] = $this->dashboard_model->getLoggedInUserData($admin_id);

        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        //Notification
        $data['notification'] = $this->notification->getNotification();

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
        $data['pending'] = $this->dashboard_model->countPending();
        $data['approved'] = $this->dashboard_model->countApproved();
        $data['cancelled'] = $this->dashboard_model->countCancelled();
        $data['profile'] = $this->dashboard_model->countUpdateProfile();
        $data['documents'] = $this->dashboard_model->countDocuments();
        $data['assistance'] = $this->dashboard_model->countAssistance();
        $data['active'] = $this->dashboard_model->countActiveAssistance();

        return view("dashboard/table_dashboard", $data);
    }

    public function voterDash()
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $admin_id = session()->get('logged_admin');

        // Get Admin Information
        $data['userdata'] = $this->dashboard_model->getLoggedInUserData($admin_id);

        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        //Notification
        $data['notification'] = $this->notification->getNotification();

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
        $data['pending'] = $this->dashboard_model->countPending();
        $data['approved'] = $this->dashboard_model->countApproved();
        $data['cancelled'] = $this->dashboard_model->countCancelled();
        $data['profile'] = $this->dashboard_model->countUpdateProfile();
        $data['documents'] = $this->dashboard_model->countDocuments();
        $data['assistance'] = $this->dashboard_model->countAssistance();
        $data['active'] = $this->dashboard_model->countActiveAssistance();

        return view("dashboard/table_dashboard", $data);
    }
}
