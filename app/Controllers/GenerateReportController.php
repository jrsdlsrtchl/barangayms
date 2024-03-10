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

        return view("generate_report/generate_report");
    }

    public function generateReport()
    {

        if ($this->request->getMethod() == 'post') {
            $filter = [
                'gender' => $this->request->getVar('gender'),
                'civilstatus' => $this->request->getVar('civilstatus'),
                'religion' => $this->request->getVar('religion'),
            ];

            $status = $this->report_model->report($filter);

            $data['resident'] = $status;
        }

        return view("generate_report/filtered", $data);
    }
}
