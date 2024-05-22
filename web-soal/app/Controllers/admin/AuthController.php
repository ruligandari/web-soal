<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login',
        ];

        return view('admin/login', $data);
    }
}
