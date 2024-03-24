<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AssistanceModel;

class AssistanceController extends Controller
{
    public $assistance_model;
    public function __construct()
    {
        helper('form');
        $this->assistance_model = new AssistanceModel();
    }

    public function assistance()
    {
        $data['assistance'] = $this->assistance_model->getCertType();

        return view("assistance/assistance");
    }

    public function addAssistance()
    {
        $data['assistance'] = $this->assistance_model->getCertType();
        $data['official'] = $this->assistance_model->getOfficial();
        $data['resident'] = $this->assistance_model->getResidents();

        $session = \CodeIgniter\Config\Services::session();

        if ($this->request->getMethod() == 'post') {

            $type_assistance_id = $this->request->getVar('type_assistance_id');
            $official_id = $this->request->getVar('official_id');
            $distributedate =  $this->request->getVar('distribute_date');
            $distribute = date('Y-m-d', strtotime($distributedate));
            $datareceive = $this->request->getVar('date_receive');
            $receive = date('Y-m-d', strtotime($datareceive));
            $resident_ids = $this->request->getVar('resident_id');

            foreach ($resident_ids as $resident_id) {
                $ass_data = [
                    'type_assistance_id' => $type_assistance_id,
                    'official_id' => $official_id,
                    'distribute_date' => $distribute,
                    'date_receive' => $receive,
                    'resident_id' => $resident_id,
                ];

                $status = $this->assistance_model->addAssistance($ass_data);
            }

            if ($status) {
                $session->setTempdata('success', 'Assistance added successfully!', 3);
                return redirect()->to(base_url() . "AssistanceController/assistance");
            } else {
                $session->setTempdata('error', 'Something went wrong!', 3);
                return redirect()->to(base_url() . "AssistanceController/assistance");
            }
        }

        return view("assistance/add_assistance", $data);
    }
}
