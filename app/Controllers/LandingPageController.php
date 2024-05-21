<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class LandingPageController extends Controller
{
    public function home()
    {

        return view("landing-page/landing-page");
    }
}
