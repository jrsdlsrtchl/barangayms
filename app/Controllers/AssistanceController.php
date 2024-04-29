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
        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        $data['assistance'] = $this->assistance_model->assistance();

        return view("assistance/assistance", $data);
    }

    public function listAssistance()
    {
        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        $data['assistance'] = $this->assistance_model->getCertType();

        return view("assistance/list_assistance", $data);
    }

    public function addAssistance()
    {
        //Sidebar list of certificates
        $data['document'] = $this->request->data;

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
                $session->setTempdata('success', 'Added successfully!', 3);
                return redirect()->to(base_url() . "AssistanceController/assistance");
            } else {
                $session->setTempdata('error', 'Something went wrong!', 3);
                return redirect()->to(base_url() . "AssistanceController/assistance");
            }
        }

        return view("assistance/add_assistance", $data);
    }

    public function addTypeAssistance()
    {
        $session = \CodeIgniter\Config\Services::session();

        if ($this->request->getMethod() == 'post') {
            $ass_data = [
                'type_assistance' => $this->request->getVar('type_assistance'),
            ];

            $status = $this->assistance_model->addTypeAssistance($ass_data);

            if ($status) {
                $session->setTempdata('success', 'Added Successfully!', 3);
                return redirect()->to(base_url() . "AssistanceController/listAssistance");
            } else {
                $session->setTempdata('error', 'Not Added! Try Again!', 3);
                return redirect()->to(base_url() . "AssistanceController/listAssistance");
            }
        }
    }

    public function editTypeAssistance($id)
    {

        $session = \CodeIgniter\Config\Services::session();

        if ($this->request->getMethod() == 'post') {
            $ass_data = [
                'type_assistance' => $this->request->getVar('type_assistance'),
            ];

            $status = $this->assistance_model->editTypeAssistance($ass_data, $id);

            if ($status) {
                $session->setTempdata('success', 'Updated Successfully!', 3);
                return redirect()->to(base_url() . "assistancecontroller/listassistance");
            } else {
                $session->setTempdata('error', 'Not Added! Try Again!', 3);
                return redirect()->to(base_url() . "assistancecontroller/listassistance");
            }
        }
    }

    public function deleteTypeAssistance($id)
    {
        $session = \CodeIgniter\Config\Services::session();
        $delete = $this->assistance_model->deleteTypeAssistance($id);

        if (!$delete) {
            $session->setTempdata('success', 'Deleted Successfully!', 3);
            return redirect()->to(base_url() . "assistancecontroller/listassistance");
        } else {
            $session->setTempdata('error', 'Something went wrong!', 3);
            return redirect()->to(base_url() . "assistancecontroller/listassistance");
        }
    }

    public function getAssResidents($id)
    {
        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        $data['resident'] = $this->assistance_model->getAssResidents($id);
        $data['assistance'] = $this->assistance_model->getAssName($id);
        $data['getresident'] = $this->assistance_model->getResidents();

        return view("assistance/view_assistance", $data);
    }

    public function deleteAssistance($id)
    {
        $session = \CodeIgniter\Config\Services::session();
        $delete = $this->assistance_model->deleteAssistance($id);

        if (!$delete) {
            $session->setTempdata('success', 'Deleted Successfully!', 3);
            return redirect()->to(base_url() . "assistancecontroller/assistance");
        } else {
            $session->setTempdata('error', 'Something went wrong!', 3);
            return redirect()->to(base_url() . "assistancecontroller/assistance");
        }
    }

    public function editAssistance($id)
    {
        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        $data['assistance'] = $this->assistance_model->getCertType();
        $data['official'] = $this->assistance_model->getOfficial();
        $data['resident'] = $this->assistance_model->getResidents();
        $data['assistance_data'] = $this->assistance_model->editAssistance($id);

        return view("assistance/edit_assistance", $data);
    }

    public function updateAssistance($id)
    {

        $session = \CodeIgniter\Config\Services::session();

        if ($this->request->getMethod() == 'post') {

            $type_assistance_id = $this->request->getVar('type_assistance_id');
            $official_id = $this->request->getVar('official_id');
            $distributedate =  $this->request->getVar('distribute_date');
            $distribute = date('Y-m-d', strtotime($distributedate));
            $datareceive = $this->request->getVar('date_receive');
            $receive = date('Y-m-d', strtotime($datareceive));

            $ass_data = [
                'type_assistance_id' => $type_assistance_id,
                'official_id' => $official_id,
                'distribute_date' => $distribute,
                'date_receive' => $receive,
            ];

            $status = $this->assistance_model->updateAssistance($ass_data, $id);


            if ($status) {
                $session->setTempdata('success', 'Updated successfully!', 3);
                return redirect()->to(base_url() . "AssistanceController/assistance");
            } else {
                $session->setTempdata('error', 'Something went wrong!', 3);
                return redirect()->to(base_url() . "AssistanceController/assistance");
            }
        }
    }

    public function deleteRecipient($id)
    {
        $session = \CodeIgniter\Config\Services::session();
        $delete = $this->assistance_model->deleteRecipient($id);

        if (!$delete) {
            $session->setTempdata('success', 'Deleted Successfully!', 3);
            return redirect()->to(base_url() . "assistancecontroller/assistance");
        } else {
            $session->setTempdata('error', 'Something went wrong!', 3);
            return redirect()->to(base_url() . "assistancecontroller/assistance");
        }
    }

    public function printAssistance($id)
    {
        $data['resident'] = $this->assistance_model->printAssistance($id);
        $data['assistance'] = $this->assistance_model->getAssName($id);

        return view("print/print_assistance", $data);
    }
}
