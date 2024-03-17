<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class RequestDocumentController extends Controller
{
    public function request()
    {

        return view("request_docs/request");
    }
}
