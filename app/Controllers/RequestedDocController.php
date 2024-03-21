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
                'official' => $this->request->getVar('official'),
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
}
