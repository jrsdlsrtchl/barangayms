<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PurokModel;

class purokcontroller extends Controller
{
    public $purok_model;
    public function __construct()
    {
        $this->purok_model = new PurokModel();
    }

    public function purok()
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $admin_id = session()->get('logged_admin');

        // Get Admin Information
        $data['userdata'] = $this->purok_model->getLoggedInUserData($admin_id);

        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        //Notification
        $data['notification'] = $this->purok_model->getNotification();

        // Count Population from each Purok
        $data['purokUno'] = $this->purok_model->purokUno();
        $data['purokDos'] = $this->purok_model->purokDos();
        $data['purokTres'] = $this->purok_model->purokTres();
        $data['purokKwatro'] = $this->purok_model->purokKwatro();
        $data['purokSingko'] = $this->purok_model->purokSingko();
        $data['purokSays'] = $this->purok_model->purokSays();
        $data['purokSyete'] = $this->purok_model->purokSyete();

        // Count Household from Each Purok
        $data['householdUno'] = $this->purok_model->householdUno();
        $data['householdDos'] = $this->purok_model->householdDos();
        $data['householdTres'] = $this->purok_model->householdTres();
        $data['householdKwatro'] = $this->purok_model->householdKwatro();
        $data['householdSingko'] = $this->purok_model->householdSingko();
        $data['householdSays'] = $this->purok_model->householdSays();
        $data['householdSyete'] = $this->purok_model->householdSyete();

        return view("purok/purok", $data);
    }

    public function viewPurok($puroknumber)
    {
        if (!(session()->has('logged_resident') || session()->has('logged_admin'))) {
            return redirect()->to(base_url() . "authenticationcontroller/login");
        }

        $admin_id = session()->get('logged_admin');

        // Get Admin Information
        $data['userdata'] = $this->purok_model->getLoggedInUserData($admin_id);

        //Sidebar list of certificates
        $data['document'] = $this->request->data;

        //Notification
        $data['notification'] = $this->purok_model->getNotification();

        $data['resident'] = $this->purok_model->viewPurok($puroknumber);
        $data['purok'] = $this->purok_model->getPurok($puroknumber);

        return view("purok/purok_population", $data);
    }
}
