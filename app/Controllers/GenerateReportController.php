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
        $data['purok'] = $this->report_model->getPurok();
        $data['household'] = $this->report_model->getHousehold();

        return view("generate_report/generate_report", $data);
    }

    public function generateReport()
    {

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
        $data['purok'] = $this->report_model->getPurok();
        $data['household'] = $this->report_model->getHousehold();

        return view("generate_report/print_report", $data);
    }

    public function print()
    {
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
                'purok_id' => $this->request->getVar('purok_id'),
                'household_id' => $this->request->getVar('household_id'),

            ];

            $status = $this->report_model->report($filter);

            $data['resident'] = $status;
        }

        return view("print/print_resident", $data);
    }
}
