<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ResidentModel;

class ResidentController extends Controller
{
    public $resident_model;
    public function __construct()
    {
        helper('form');
        $this->resident_model = new ResidentModel();
    }

    public function resident()
    {
        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        $data['resident'] = $this->resident_model->getResidents();

        return view("resident/resident", $data);
    }

    public function viewProfile($id)
    {
        // Sidebar list of certificates
        $data['document'] = $this->request->data;

        $data['resident'] = $this->resident_model->getResidentsProfile($id);
        $data['assistance'] = $this->resident_model->getAssistance($id);

        return view("resident/view_profile", $data);
    }

    public function addResident()
    {
        $data = [];
        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        $data['purok'] = $this->resident_model->getPurok();
        $data['household'] = $this->resident_model->getHousehold();

        $session = \CodeIgniter\Config\Services::session();

        if ($this->request->getMethod() == 'post') {
            $uniid = md5(str_shuffle('abcsefghijklmonpqrtuvwxyz' . time()));
            $datebirth = $this->request->getVar('datebirth');
            $date = date('Y-m-d', strtotime($datebirth));
            $res_data = [
                'lastname' => $this->request->getVar('lastname'),
                'firstname' => $this->request->getVar('firstname'),
                'middlename' => $this->request->getVar('middlename'),
                'suffix' => $this->request->getVar('suffix'),
                'gender' => $this->request->getVar('gender'),
                'age' => $this->request->getVar('age'),
                'datebirth' => $date,
                'placebirth' => $this->request->getVar('placebirth'),
                'civilstatus' => $this->request->getVar('civilstatus'),
                'ethnicity' => $this->request->getVar('ethnicity'),
                'occupation' => $this->request->getVar('occupation'),
                'citizenship' => $this->request->getVar('citizenship'),
                'education' => $this->request->getVar('education'),
                'religion' => $this->request->getVar('religion'),
                'mobile' => $this->request->getVar('mobile'),
                'for4ps' => $this->request->getVar('for4ps'),
                'pwd' => $this->request->getVar('pwd'),
                'senior' => $this->request->getVar('senior'),
                'precinct' => $this->request->getVar('precinct'),
                'purok_id' => $this->request->getVar('purok_id'),
                'household_id' => $this->request->getVar('household_id'),
                'uniid' => $uniid,

            ];

            $status = $this->resident_model->addResident($res_data);

            if ($status) {
                $session->setTempdata('success', 'Added Successfully!', 3);
                return redirect()->to(base_url() . "residentcontroller/resident");
            } else {
                $session->setTempdata('error', 'Not Added! Try Again!', 3);
                return redirect()->to(base_url() . "residentcontroller/resident");
            }
        }

        return view("resident/add_resident", $data);
    }

    public function editResident($id)
    {
        $data = [];
        //Sidebar list of certificates
        $data['document'] = $this->request->data;
        $data['resident'] = $this->resident_model->getResidentsID($id);
        $data['purok'] = $this->resident_model->getPurok();
        $data['household'] = $this->resident_model->getHousehold();

        $session = \CodeIgniter\Config\Services::session();

        if ($this->request->getMethod() == 'post') {
            $datebirth = $this->request->getVar('datebirth');
            $date = date('Y-m-d', strtotime($datebirth));
            $res_data = [
                'lastname' => $this->request->getVar('lastname'),
                'firstname' => $this->request->getVar('firstname'),
                'middlename' => $this->request->getVar('middlename'),
                'suffix' => $this->request->getVar('suffix'),
                'gender' => $this->request->getVar('gender'),
                'age' => $this->request->getVar('age'),
                'datebirth' => $date,
                'placebirth' => $this->request->getVar('placebirth'),
                'civilstatus' => $this->request->getVar('civilstatus'),
                'ethnicity' => $this->request->getVar('ethnicity'),
                'occupation' => $this->request->getVar('occupation'),
                'citizenship' => $this->request->getVar('citizenship'),
                'education' => $this->request->getVar('education'),
                'religion' => $this->request->getVar('religion'),
                'mobile' => $this->request->getVar('mobile'),
                'for4ps' => $this->request->getVar('for4ps'),
                'pwd' => $this->request->getVar('pwd'),
                'senior' => $this->request->getVar('senior'),
                'precinct' => $this->request->getVar('precinct'),
                'purok_id' => $this->request->getVar('purok_id'),
                'household_id' => $this->request->getVar('household_id'),
            ];

            $status = $this->resident_model->editResident($res_data, $id);

            if ($status) {
                $session->setTempdata('success', 'Updated Successfully!', 3);
                return redirect()->to(base_url() . "residentcontroller/resident");
            } else {
                $session->setTempdata('error', 'No ppdates were made! Try Again!', 3);
                return redirect()->to(base_url() . "residentcontroller/resident");
            }
        }

        return view("resident/edit_resident", $data);
    }

    public function deleteResident($id)
    {
        $session = \CodeIgniter\Config\Services::session();
        $delete = $this->resident_model->deleteResident($id);
        $deleteUser = $this->resident_model->deleteUser($id);

        if (!$delete && !$deleteUser) {
            $session->setTempdata('success', 'Deleted Successfully!', 3);
            return redirect()->to(base_url() . "residentcontroller/resident");
        } else {
            $session->setTempdata('error', 'Was not Deleted!', 3);
            return redirect()->to(base_url() . "residentcontroller/resident");
        }
    }
}
