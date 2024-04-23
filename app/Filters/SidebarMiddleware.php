<?php

namespace App\Filters;

use App\Models\RequestedDocModel;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class SidebarMiddleware implements FilterInterface
{
    protected $request_model;

    public function __construct()
    {
        $this->request_model = new RequestedDocModel();
    }

    public function before(RequestInterface $request, $arguments = null)
    {

        $data = $this->request_model->document();

        $request->data = $data;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // You can add some logic here if needed
    }
}
