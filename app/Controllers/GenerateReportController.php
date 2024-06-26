<?php

namespace app\Controllers;

use CodeIgniter\Controller;
use App\Models\GenerateReportModel;

class GenerateReportController extends Controller
{
    public $report_model;
    public function __construct()
    {
        helper('form');
        $this->report_model = new GenerateReportModel();
    }

    public function report()
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $admin_id = session()->get('logged_admin');

        // Get Admin Information
        $data['userdata'] = $this->report_model->getLoggedInUserData($admin_id);

        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        //Notification
        $data['notification'] = $this->report_model->getNotification();

        $data['purok'] = $this->report_model->getPurok();
        $data['household'] = $this->report_model->getHousehold();

        return view("generate_report/generate_report", $data);
    }

    public function generateReport()
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $admin_id = session()->get('logged_admin');

        // Get Admin Information
        $data['userdata'] = $this->report_model->getLoggedInUserData($admin_id);

        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        //Notification
        $data['notification'] = $this->report_model->getNotification();

        $data['purok'] = $this->report_model->getPurok();
        $data['household'] = $this->report_model->getHousehold();

        if ($this->request->getMethod() == 'post') {
            $filter = [
                'gender' => $this->request->getVar('gender'),
                'civilstatus' => $this->request->getVar('civilstatus'),
                'religion' => $this->request->getVar('religion'),
                'ethnicity' => $this->request->getVar('ethnicity'),
                'education' => $this->request->getVar('education'),
                'for4ps' => $this->request->getVar('for4ps'),
                'pwd' => $this->request->getVar('pwd'),
                'senior' => $this->request->getVar('senior'),
                'precinct' => $this->request->getVar('precinct'),
                'min_age' => $this->request->getVar('min_age'),
                'max_age' => $this->request->getVar('max_age'),
                'purok_id' => $this->request->getVar('purok_id'),
                'household_id' => $this->request->getVar('household_id'),
            ];

            $status = $this->report_model->report($filter);

            $data['resident'] = $status;
        }

        return view("generate_report/filtered", $data);
    }

    public function printReport()
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $admin_id = session()->get('logged_admin');

        // Get Admin Information
        $data['userdata'] = $this->report_model->getLoggedInUserData($admin_id);

        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        //Notification
        $data['notification'] = $this->report_model->getNotification();

        $data['purok'] = $this->report_model->getPurok();
        $data['household'] = $this->report_model->getHousehold();

        return view("generate_report/print_report", $data);
    }

    public function print()
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $admin_id = session()->get('logged_admin');
        $data['printed'] = $this->report_model->getPrintedBy($admin_id);

        $data['purok'] = $this->report_model->getPurok();
        $data['household'] = $this->report_model->getHousehold();

        if ($this->request->getMethod() == 'post') {
            $filter = [
                'gender' => $this->request->getVar('gender'),
                'civilstatus' => $this->request->getVar('civilstatus'),
                'religion' => $this->request->getVar('religion'),
                'ethnicity' => $this->request->getVar('ethnicity'),
                'education' => $this->request->getVar('education'),
                'for4ps' => $this->request->getVar('for4ps'),
                'pwd' => $this->request->getVar('pwd'),
                'senior' => $this->request->getVar('senior'),
                'precinct' => $this->request->getVar('precinct'),
                'min_age' => $this->request->getVar('min_age'),
                'max_age' => $this->request->getVar('max_age'),
                'purok_id' => $this->request->getVar('purok_id'),
                'household_id' => $this->request->getVar('household_id'),

            ];

            $status = $this->report_model->report($filter);

            $data['resident'] = $status;
        }

        return view("print/print_report", $data);
    }
}
