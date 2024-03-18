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

        return view("requested/pending", $data);
    }

    public function updateRequest($request_id)
    {
        $session = \CodeIgniter\Config\Services::session();

        if ($this->request->getMethod() == 'post') {
            $data = [
                'status' => $this->request->getVar('status'),
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

    public function getHistory()
    {
        $data['request'] = $this->requested_model->getHistory();

        return view("requested/history", $data);
    }
}
