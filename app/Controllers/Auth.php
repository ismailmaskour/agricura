<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController
{
    public function index()
    {
        // Check if is logged in start;
        if (session()->has('isLoggedIn')) {
            return redirect()->to('/');
        }
        // Check if is logged in end;

        return view('admin/authentication/login');
    }

    public function login()
    {
        // check if is loggedIn Start;
        if (session()->has('isLoggedIn')) {
            return redirect()->to('/');
        }
        // check if is loggedIn End;

        $session = session();
        $userModel = new AuthModel();
        if ($this->request->getVar('email')) {

            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');

            $data = $userModel->where('email', $email)->first();

            if ($data) {
                $pass = $data['password'];
                $authenticatePassword = password_verify($password, $pass);
                if ($authenticatePassword) {
                    $ses_data = [
                        'id' => $data['id'],
                        'firstname' => $data['firstname'],
                        'lastname' => $data['lastname'],
                        'role' => $data['role'],
                        'isLoggedIn' => TRUE
                    ];

                    $session->set($ses_data);

                    return redirect()->to('/');
                } else {
                    $session->setFlashdata('msg', 'Password is incorrect.');
                    return view('admin/authentication/login');
                }
            } else {
                $session->setFlashdata('msg', 'Email does not exist.');
                return view('admin/authentication/login');
            }
        } else {
            return view('admin/authentication/login');
        }
    }
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/auth/login');
    }
}
