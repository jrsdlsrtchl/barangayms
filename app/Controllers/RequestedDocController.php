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

    public function getRequest()
    {
        $data['request'] = $this->requested_model->getRequest();
        $data['official'] = $this->requested_model->getOfficial();

        return view("requested/requested", $data);
    }

    public function getApproved()
    {
        $data['request'] = $this->requested_model->getApproved();

        return view("requested/approved", $data);
    }

    public function getCancelled()
    {
        $data['request'] = $this->requested_model->getCancelled();

        return view("requested/cancelled", $data);
    }

    public function getHistory()
    {
        $data['request'] = $this->requested_model->getHistory();

        return view("requested/history", $data);
    }

    public function updateRequest($request_id)
    {
        $session = \CodeIgniter\Config\Services::session();

        if ($this->request->getMethod() == 'post') {
            $data = [
                'request_status' => $this->request->getVar('request_status'),
                'official_id' => $this->request->getVar('official_id'),
            ];

            $status = $this->requested_model->updateRequest($data, $request_id);

            if ($status) {
                $session->setTempdata('success', 'Request has been updated successfully!', 3);
                return redirect()->to(base_url() . "RequestedDocController/getrequest");
            } else {
                $session->setTempdata('error', 'Something went wrong! Try Again!', 3);
                return redirect()->to(base_url() . "RequestedDocController/getrequest");
            }
        }
    }

    public function deleteRequestApproved($request_id)
    {
        $session = \CodeIgniter\Config\Services::session();
        $delete = $this->requested_model->deleteRequest($request_id);

        if (!$delete) {
            $session->setTempdata('success', 'Request deleted successfully!', 3);
            return redirect()->to(base_url() . "RequestedDocController/getapproved");
        } else {
            $session->setTempdata('error', 'Somthing went wrong!', 3);
            return redirect()->to(base_url() . "RequestedDocController/getapproved");
        }
    }

    public function deleteRequestCancelled($request_id)
    {
        $session = \CodeIgniter\Config\Services::session();
        $delete = $this->requested_model->deleteRequest($request_id);

        if (!$delete) {
            $session->setTempdata('success', 'Request deleted successfully!', 3);
            return redirect()->to(base_url() . "RequestedDocController/getcancelled");
        } else {
            $session->setTempdata('error', 'Somthing went wrong!', 3);
            return redirect()->to(base_url() . "RequestedDocController/getcancelled");
        }
    }

    public function deleteRequestHistroy($request_id)
    {
        $session = \CodeIgniter\Config\Services::session();
        $delete = $this->requested_model->deleteRequest($request_id);

        if (!$delete) {
            $session->setTempdata('success', 'Request deleted successfully!', 3);
            return redirect()->to(base_url() . "RequestedDocController/getHistory");
        } else {
            $session->setTempdata('error', 'Somthing went wrong!', 3);
            return redirect()->to(base_url() . "RequestedDocController/getHistory");
        }
    }

    public function document()
    {
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
                $session->setTempdata('success', 'Document added uccessfully!', 3);
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
            $session->setTempdata('success', 'Document deleted successfully!', 3);
            return redirect()->to(base_url() . "RequestedDocController/document");
        } else {
            $session->setTempdata('error', 'Somthing went wrong!', 3);
            return redirect()->to(base_url() . "RequestedDocController/document");
        }
    }
}
