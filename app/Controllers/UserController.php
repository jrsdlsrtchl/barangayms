<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class UserController extends Controller
{
    public $user_model;
    public $session;
    public function __construct()
    {
        helper('form');
        $this->user_model = new UserModel();
        $this->session = \Config\Services::session();
    }

    public function user()
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        //Logged Resident
        $resident_id = session()->get('logged_resident');

        //Notification top-bar
        $data['notification'] = $this->user_model->getNotification($resident_id);

        //Get User Information
        $data['userdata'] = $this->user_model->getLoggedInUserData($resident_id);

        $data['pending'] = $this->user_model->countPending($resident_id);
        $data['approved'] = $this->user_model->countApproved($resident_id);
        $data['cancelled'] = $this->user_model->countCancelled($resident_id);
        $data['profile'] = $this->user_model->countUpdateProfile($resident_id);

        $data['activity'] = $this->user_model->getLoginActivity($resident_id);

        return view("user/user_home", $data);
    }

    public function admin()
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        //Get Admin Information
        $admin_id = session()->get('logged_admin');

        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        //Notification top-bar
        $data['notification'] = $this->user_model->adminNotification();

        $data['userdata'] = $this->user_model->getLoggedInUserData($admin_id);
        $data['assistance'] = $this->user_model->getAssistance($admin_id);

        return view("admin/admin_profile", $data);
    }

    public function manageProfile()
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $resident_id = session()->get('logged_resident');

        //Notification top-bar
        $data['notification'] = $this->user_model->getNotification($resident_id);

        $data['userdata'] = $this->user_model->getLoggedInUserData($resident_id);
        $data['assistance'] = $this->user_model->getAssistance($resident_id);
        $data['purok'] = $this->user_model->getPurok();
        $data['household'] = $this->user_model->getHousehold();

        return view("user/manage_profile", $data);
    }

    public function updateProfile($id)
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $session = \CodeIgniter\Config\Services::session();

        if ($this->request->getMethod() == 'post') {
            $datebirth = $this->request->getVar('datebirth');
            $date = date('Y-m-d', strtotime($datebirth));
            $res_data = [
                'resident_id' => $id,
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

            $status = $this->user_model->updateProfile($res_data);

            if ($status) {
                $session->setTempdata('success', 'The Brgy. Staff will review your inputted information!', 3);
                return redirect()->to(base_url() . "UserController/manageprofile");
            } else {
                $session->setTempdata('error', 'Something went wrong!', 3);
                return redirect()->to(base_url() . "UserController/manageprofile");
            }
        }

        return view("resident/add_resident");
    }

    public function resetPassword()
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $data['validation'] = null;

        //Logged Resident
        $resident_id = session()->get('logged_resident');

        //Notification top-bar
        $data['notification'] = $this->user_model->getNotification($resident_id);

        //Get User Information
        $data['userdata'] = $this->user_model->getLoggedInUserData($resident_id);

        $session = \Config\Services::session();
        $resident_id = session()->get('logged_resident');
        $usertype = 'Resident';
        $userdata = $this->user_model->getPassword($resident_id, $usertype);

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'oldpass' => 'required',
                'newpass' => [
                    'rules' => 'required|min_length[7]|max_length[15]',
                    'errors' => [
                        'required' => 'Password is required',
                        'min_length' => 'Password must contain 7 characters',
                        'max_length' => 'Password must not exceed 15 characters'
                    ],
                ],
                'confirmpass' => [
                    'rules' => 'required|matches[newpass]',
                    'errors' => [
                        'required' => 'Password is required',
                        'matches' => 'Password do not match',
                    ],
                ],
            ];

            if ($this->validate($rules)) {
                $oldpass = $this->request->getVar('oldpass');
                $newpass = $this->request->getVar('newpass');

                if ($oldpass == $userdata->password) {
                    if ($this->user_model->updatePassword($newpass, $resident_id, $usertype)) {
                        $session->setTempdata('success', 'Password updated successfully!', 3);
                        return redirect()->to(current_url());
                    } else {
                        $session->setTempdata('error', 'Something went wrong! Try again!', 3);
                        return redirect()->to(current_url());
                    }
                } else {
                    $session->setTempdata('error', 'Invalid old password!', 3);
                    return redirect()->to(current_url());
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view("user/reset_password", $data);
    }

    public function getImage()
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        //Logged Resident
        $resident_id = session()->get('logged_resident');

        //Notification top-bar
        $data['notification'] = $this->user_model->getNotification($resident_id);

        //Get User Information
        $data['userdata'] = $this->user_model->getLoggedInUserData($resident_id);

        $resident_id = session()->get('logged_resident');
        $data['purok'] = $this->user_model->getPurok();
        $data['household'] = $this->user_model->getHousehold();
        $data['assistance'] = $this->user_model->getAssistance($resident_id);
        $data['userdata'] = $this->user_model->getLoggedInUserData($resident_id);
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'image' => 'uploaded[image]|max_size[image,2024]|ext_in[image,png,jpg,gif]',
            ];
            if ($this->validate($rules)) {
                $file = $this->request->getFile('image');
                if ($file->isValid() && !$file->hasMoved()) {
                    if ($file->move(FCPATH . 'public/profile_pics', $file->getRandomName())) {
                        $path = base_url() . 'public/profile_pics/' . $file->getName();
                        $status = $this->user_model->updateImage($path, $resident_id);
                        if ($status == true) {
                            session()->setTempdata('success', 'Image uploaded successfully', 3);
                            return redirect()->to(current_url());
                        } else {
                            session()->setTempdata('error', 'Something went wrong!', 3);
                            return redirect()->to(current_url());
                        }
                    } else {
                        session()->setTempdata('error', $file->getErrorString(), 3);
                        return redirect()->to(current_url());
                    }
                } else {
                    session()->setTempdata('error', 'Uploaded invalid file', 3);
                    return redirect()->to(current_url());
                }
            } else {
                session()->setTempdata('error', 'Invalid file upload!', 3);
                return redirect()->to(current_url());
            }
        }
        return view("user/manage_profile", $data);
    }
}
