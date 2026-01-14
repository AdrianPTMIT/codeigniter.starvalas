<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;

class UserValas extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $userModel = new UserModel;

        return $this->respond(['users' => $userModel->findAll()], 200);

    }
}