<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RequestDocumentModel;

class RequestDocumentController extends Controller
{
    public $request_model;
    public function __construct()
    {
        helper('form');
        $this->request_model = new RequestDocumentModel();
    }

    public function request()
    {
        $resident_id = session()->get('logged_resident');
        $data['request'] = $this->request_model->getRequest($resident_id);
        $data['document'] = $this->request_model->getDocType();

        return view("request_docs/pending", $data);
    }

    public function addRequest()
    {
        $session = \CodeIgniter\Config\Services::session();

        if ($this->request->getMethod() == 'post') {
            $resident_id = session()->get('logged_resident');
            $tracking_id = md5(str_shuffle('abcsefghijklmonpqrtuvwxyz' . time()));
            $data = [
                'resident_id' => $resident_id,
                'purpose' => $this->request->getVar('purpose'),
                'certificate_id' => $this->request->getVar('certificate_id'),
                'tracking_id' => $tracking_id,

            ];

            $status = $this->request_model->addRequest($data);

            if ($status) {
                $session->setTempdata('success', 'Request has been sent successfully!', 3);
                return redirect()->to(base_url() . "RequestDocumentController/request");
            } else {
                $session->setTempdata('error', 'Something went wrong! Try Again!', 3);
                return redirect()->to(base_url() . "RequestDocumentController/request");
            }
        }
    }

    public function getHistory()
    {
        $resident_id = session()->get('logged_resident');
        $data['request'] = $this->request_model->getHistory($resident_id);

        return view("request_docs/history", $data);
    }
}
