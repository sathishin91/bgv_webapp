<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\I18n\Time;


class Login extends BaseController
{
    public function index()
    {
        return view('pages/auth/login');
    }

    public function changePasswordIndex()
    {
        return view('pages/auth/change-password');
    }

    public function checkLogin()
    {

        $UserModel = new UserModel();


        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('pass');

        $result = $UserModel->where('email', $email)->findAll();

        if ($result) {
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
        } else {
            session()->setFlashdata('error', 'Email address not found.');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session_destroy();
        return redirect()->to("/");
    }

    public function changePassword()
    {
        // print_r($_POST);
        // die();
        // Retrieve form data
        $myTime = new Time('now', 'Asia/Kolkata', 'en_US');

        $userId = $this->request->getPost('id');
        $email = $this->request->getPost('email');
        $oldPassword = $this->request->getPost('old_password');
        $newPassword = $this->request->getPost('new_password');
        $confirmPassword = $this->request->getPost('confirm_password');

        // Validate the old password (you should implement your own validation logic)
        $UserModel = new UserModel();
        $user = $UserModel->find($userId);

        // Check if new password and confirm password match
        if ($newPassword !== $confirmPassword) {
            // New password and confirm password don't match
            // return redirect()->to('/change-password')->with('error', 'New password and confirm password do not match.');
            $data = ['status' => 1002];
            return $this->response->setJSON($data);
        }

        if ($oldPassword !== $user['password']) {
            // Old password doesn't match
            // return redirect()->to('/change-password')->with('error', 'Old password is incorrect.');
            $data = ['status' => 1001];
            return $this->response->setJSON($data);
        }

        // Update the password in the database
        // $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);
        $data = [
            'password' => $newPassword,
            'updated_at' => $myTime,
        ];

        $res = $UserModel->update($userId, $data);
        if ($res) {
            $data = ['status' => 1000];
        } else {
            $data = ['status' => 1003];
        }
        return $this->response->setJSON($data);
    }
}
