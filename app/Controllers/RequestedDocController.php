<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RequestedDocModel;

class RequestedDocController extends Controller
{
    public $requested_model;
    public function __construct()
    {
        helper('form');
        $this->requested_model = new RequestedDocModel();
    }

    public function getRequest($id)
    {
        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        $data['request'] = $this->requested_model->getRequest($id);
        $data['official'] = $this->requested_model->getOfficial();
        $data['certificate'] = $this->requested_model->getCert($id);
        return view("requested/requested", $data);
    }

    public function updateRequest($id, $id2)
    {

        $session = \CodeIgniter\Config\Services::session();

        $admin_id = session()->get('logged_admin');

        if ($this->request->getMethod() == 'post') {
            $data = [
                'request_status' => $this->request->getVar('request_status'),
                'official_id' => $admin_id
            ];

            $status = $this->requested_model->updateRequest($data, $id);

            if ($status) {
                $session->setTempdata('success', 'Updated Successfully!', 3);
                return redirect()->to(base_url() . "RequestedDocController/getrequest/$id2");
            } else {
                $session->setTempdata('error', 'Something went wrong! Try Again!', 3);
                return redirect()->to(base_url() . "RequestedDocController/getrequest/$id2");
            }
        }
    }

    public function  deleteRequest($id, $id2)
    {
        $session = \CodeIgniter\Config\Services::session();
        $delete = $this->requested_model->deleteRequest($id);

        if (!$delete) {
            $session->setTempdata('success', 'Deleted Successfully!', 3);
            return redirect()->to(base_url() . "RequestedDocController/getRequest/$id2");
        } else {
            $session->setTempdata('error', 'Somthing went wrong!', 3);
            return redirect()->to(base_url() . "RequestedDocController/getRequest/$id2");
        }
    }


    public function document()
    {
        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        $data['document'] = $this->requested_model->document();

        return view("requested/document", $data);
    }

    public function addDocument()
    {
        $session = \CodeIgniter\Config\Services::session();

        if ($this->request->getMethod() == 'post') {
            $data = [
                'certificate_type' => $this->request->getVar('certificate_type'),
            ];

            $status = $this->requested_model->addDocument($data);

            if ($status) {
                $session->setTempdata('success', 'Added Successfully!', 3);
                return redirect()->to(base_url() . "RequestedDocController/document");
            } else {
                $session->setTempdata('error', 'Something went wrong! Try Again!', 3);
                return redirect()->to(base_url() . "RequestedDocController/document");
            }
        }
    }

    public function deleteDocument($document_id)
    {
        $session = \CodeIgniter\Config\Services::session();
        $delete = $this->requested_model->deleteDocument($document_id);

        if (!$delete) {
            $session->setTempdata('success', 'Deleted Successfully!', 3);
            return redirect()->to(base_url() . "RequestedDocController/document");
        } else {
            $session->setTempdata('error', 'Somthing went wrong!', 3);
            return redirect()->to(base_url() . "RequestedDocController/document");
        }
    }

    public function routeCertId($reqID, $certID)
    {
        $session = \CodeIgniter\Config\Services::session();

        if ($certID == 1) {
            $admin_id = session()->get('logged_admin');
            $data['printed'] = $this->requested_model->getPrintedBy($admin_id);
            $data['official'] = $this->requested_model->getCaptain();
            $data['request'] = $this->brgyResidency($reqID);
            return view("print/print_residency", $data);
        } elseif ($certID == 2) {
            $admin_id = session()->get('logged_admin');
            $data['printed'] = $this->requested_model->getPrintedBy($admin_id);
            $data['official'] = $this->requested_model->getCaptain();
            $data['request'] = $this->brgyCertification($reqID);
            return view("print/print_certification", $data);
        } elseif ($certID == 3) {
            $admin_id = session()->get('logged_admin');
            $data['printed'] = $this->requested_model->getPrintedBy($admin_id);
            $data['official'] = $this->requested_model->getCaptain();
            $data['request'] = $this->brgyIndigency($reqID);
            return view("print/print_indigency", $data);
        } else {
            $session->setTempdata('error', 'No Format Available! Please Contact Developers!', 3);
            return redirect()->to(base_url() . "RequestedDocController/getRequest/$certID");
        }
    }

    public function brgyResidency($reqID)
    {
        return $this->requested_model->printRequest($reqID);
    }

    public function  brgyCertification($reqID)
    {
        return $this->requested_model->printRequest($reqID);
    }

    public function brgyIndigency($reqID)
    {
        return $this->requested_model->printRequest($reqID);
    }
}
