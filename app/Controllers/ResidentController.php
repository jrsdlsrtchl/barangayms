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
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $admin_id = session()->get('logged_admin');

        // Get Admin Information
        $data['userdata'] = $this->resident_model->getLoggedInUserData($admin_id);

        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        //Notification
        $data['notification'] = $this->resident_model->getNotification();

        $data['resident'] = $this->resident_model->getResidents();

        return view("resident/resident", $data);
    }

    public function viewProfile($id)
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $admin_id = session()->get('logged_admin');

        // Get Admin Information
        $data['userdata'] = $this->resident_model->getLoggedInUserData($admin_id);

        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        //Notification
        $data['notification'] = $this->resident_model->getNotification();

        $data['resident'] = $this->resident_model->getResidentsProfile($id);
        $data['assistance'] = $this->resident_model->getAssistance($id);

        return view("resident/view_profile", $data);
    }

    public function addResident()
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $data = [];

        $data['validation'] = null;

        $admin_id = session()->get('logged_admin');

        // Get Admin Information
        $data['userdata'] = $this->resident_model->getLoggedInUserData($admin_id);

        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        //Notification
        $data['notification'] = $this->resident_model->getNotification();

        $data['purok'] = $this->resident_model->getPurok();
        $data['household'] = $this->resident_model->getHousehold();


        // Sessions for prompt
        $session = \CodeIgniter\Config\Services::session();

        //Validation for Alpha Space
        $validation = \Config\Services::validation();

        if ($this->request->getMethod() == 'post') {

            $rules = [
                'lastname' => 'required|alpha_space',
                'firstname' => 'required|alpha_space',
                'middlename' => 'required|alpha_space',
                'suffix' => 'alpha_space',
                'gender' => 'required',
                'age' => 'required|numeric',
                'datebirth' => 'required',
                'placebirth' => 'required|alpha_space',
                'civilstatus' => 'required',
                'ethnicity' => 'required',
                'occupation' => 'required|alpha_space',
                'citizenship' => 'required',
                'education' => 'required',
                'religion' => 'required',
                'mobile' => 'required|numeric',
                'for4ps' => 'required',
                'pwd' => 'required',
                'senior' => 'required',
                'precinct' => 'required',
                'purok_id' => 'required',
                'household_id' => 'required',
            ];

            $message = [
                'datebirth' => [
                    'required' => 'The date of birth is required.',
                ],
                'placebirth' => [
                    'required' => 'The place of birth is required.',
                ],
                'for4ps' => [
                    'required' => 'The 4ps field is required.',
                ],
                'purok_id' => [
                    'required' => 'The purok field is required.',
                ],
                'household_id' => [
                    'required' => 'The household field is required.',
                ],


                //WALA PAKA HOMAN DRI CHEL TIWASA NYA KY VALIDATION NI DIRI!!!!
            ];

            if ($this->validate($rules, $message)) {

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
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view("resident/add_resident", $data);
    }

    public function editResident($id)
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $data = [];

        $admin_id = session()->get('logged_admin');

        // Get Admin Information
        $data['userdata'] = $this->resident_model->getLoggedInUserData($admin_id);

        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        //Notification
        $data['notification'] = $this->resident_model->getNotification();

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
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

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

    public function getHousehold()
    {
        // Get the 'purok' parameter from the request
        $purok = $this->request->getVar('purok');

        // Check if the 'purok' parameter is present
        if ($purok === null) {
            return $this->response->setJSON(['error' => 'Purok parameter is missing'], 400);
        }

        // Retrieve household data based on the 'purok' parameter
        $data = $this->resident_model->getHouseholdID($purok);

        // Check if data was found
        if (empty($data)) {
            return $this->response->setJSON(['error' => 'No households found for the given Purok'], 404);
        }

        // Return the data as a JSON response
        return $this->response->setJSON($data);
    }
}
