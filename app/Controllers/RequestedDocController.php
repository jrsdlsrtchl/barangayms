<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RequestedDocModel;

class RequestedDocController extends Controller
{
    public $requested_model;
    public $notification;
    public function __construct()
    {
        helper('form');
        $this->requested_model = new RequestedDocModel();
        $this->notification = new RequestedDocModel();
    }

    public function getRequest($id)
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $admin_id = session()->get('logged_admin');

        // Get Admin Information
        $data['userdata'] = $this->requested_model->getLoggedInUserData($admin_id);

        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        //Notification
        $data['notification'] = $this->requested_model->getNotification();

        $data['request'] = $this->requested_model->getRequest($id);
        $data['official'] = $this->requested_model->getOfficial();
        $data['certificate'] = $this->requested_model->getCert($id);

        return view("requested/requested", $data);
    }

    public function updateRequest($id, $id2, $id3)
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $admin_id = session()->get('logged_admin');

        // Get Admin Information
        $data['userdata'] = $this->requested_model->getLoggedInUserData($admin_id);

        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        //Notification
        $data['notification'] = $this->requested_model->getNotification();


        $session = \CodeIgniter\Config\Services::session();

        if ($this->request->getMethod() == 'post') {
            $data = [
                'request_status' => $this->request->getVar('request_status'),
                'official_id' => $admin_id
            ];

            $status = $this->requested_model->updateRequest($data, $id);

            $notif_data = [
                'resident_id' => $id3,
                'certificate_id' => $id2,
                'admin_id' => $admin_id,
                'req_status' => $this->request->getVar('request_status')
            ];

            $notif_data = $this->requested_model->userNotifs($notif_data);

            if ($status && $notif_data) {
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
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

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
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $admin_id = session()->get('logged_admin');

        // Get Admin Information
        $data['userdata'] = $this->requested_model->getLoggedInUserData($admin_id);

        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        //Notification
        $data['notification'] = $this->requested_model->getNotification();

        $data['document'] = $this->requested_model->document();

        return view("requested/document", $data);
    }

    public function addDocument()
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

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
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

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
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $admin_id = session()->get('logged_admin');

        // Get Admin Information
        $data['userdata'] = $this->requested_model->getLoggedInUserData($admin_id);

        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        //Notification
        $data['notification'] = $this->requested_model->getNotification();

        $session = \CodeIgniter\Config\Services::session();

        if ($certID == 1) {
            $admin_id = session()->get('logged_admin');
            $status = [
                'request_status' => 'Approved',
            ];
            $this->requested_model->updateStatus($status, $reqID);
            $data['printed'] = $this->requested_model->getPrintedBy($admin_id);
            $data['official'] = $this->requested_model->getCaptain();
            $data['request'] = $this->brgyResidency($reqID);

            return view("print/print_residency", $data);
        } elseif ($certID == 2) {
            $admin_id = session()->get('logged_admin');
            $status = [
                'request_status' => 'Approved',
            ];
            $this->requested_model->updateStatus($status, $reqID);
            $data['printed'] = $this->requested_model->getPrintedBy($admin_id);
            $data['official'] = $this->requested_model->getCaptain();
            $data['request'] = $this->brgyCertification($reqID);
            return view("print/print_certification", $data);
        } elseif ($certID == 3) {
            $admin_id = session()->get('logged_admin');
            $status = [
                'request_status' => 'Approved',
            ];
            $this->requested_model->updateStatus($status, $reqID);
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
