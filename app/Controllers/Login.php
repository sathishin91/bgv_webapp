<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        return view('pages/login');
    }

    public function checkLogin()
    {

        $UserModel = new UserModel();

        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('pass');

        $result = $UserModel->where('email', $email)->findAll();

        if ($result[0]['id'] > 0) {
            if ($password == $result[0]['password']) {
                $this->session->set("user", $result);
                return redirect()->to('/all-client');
            } else {
                session()->setFlashdata('error', 'Invalid Email or Password.');
                return redirect()->to('/login');
            }
        } else {
            session()->setFlashdata('error', 'Invalid Email or Password.');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session_destroy();
        return redirect()->to("/");
    }
}
