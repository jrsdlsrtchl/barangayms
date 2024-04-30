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

        return view("request_docs/active", $data);
    }

    public function getApproved()
    {
        $resident_id = session()->get('logged_resident');
        $data['request'] = $this->request_model->getApproved($resident_id);
        $data['document'] = $this->request_model->getDocType();

        return view("request_docs/approved", $data);
    }

    public function getCancelled()
    {
        $resident_id = session()->get('logged_resident');
        $data['request'] = $this->request_model->getCancelled($resident_id);
        $data['document'] = $this->request_model->getDocType();

        return view("request_docs/cancelled", $data);
    }

    public function addRequest()
    {
        $session = \CodeIgniter\Config\Services::session();

        if ($this->request->getMethod() == 'post') {
            $resident_id = session()->get('logged_resident');
            $action = "requested a";
            $image = $this->request_model->getImage($resident_id);
            $image_notif = $image->image;
            $tracking_id = md5(str_shuffle('abcsefghijklmonpqrtuvwxyz' . time()));
            $data = [
                'resident_id' => $resident_id,
                'purpose' => $this->request->getVar('purpose'),
                'certificate_id' => $this->request->getVar('certificate_id'),
                'tracking_id' => $tracking_id,
            ];
            $data_notif = [
                'resident_id' => $resident_id,
                'action' => $action,
                'image_notif' => $image_notif,
                'doc_type' => $this->request->getVar('certificate_id'),
            ];

            $status = $this->request_model->addRequest($data);
            $notif = $this->request_model->notification($data_notif);

            if ($status && $notif) {
                $session->setTempdata('success', 'Requested Successfully!', 3);
                return redirect()->to(base_url() . "RequestDocumentController/request");
            } else {
                $session->setTempdata('error', 'Something went wrong! Try Again!', 3);
                return redirect()->to(base_url() . "RequestDocumentController/request");
            }
        }
    }
}
