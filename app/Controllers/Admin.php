<?php


namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $error = '';

        if ($this->request->getMethod() === 'post') {
            $adminUsername = $this->request->getPost('adminUsername');
            $adminPassword = $this->request->getPost('adminPassword');
            if ($adminUsername === '123' && $adminPassword === '123') {
                // Redirect to dashboard
                return redirect()->to('dashboard');
            } else {
                $error = 'Invalid username or password';
            }
        }

        return view('adminlogin', ['error' => $error]);
    }
}