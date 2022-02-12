<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BranchesModel;
use App\Models\RolesModel;
use  App\Models\UsersModel;

class Users extends BaseController
{

    public function index()
    {

        $userModel = new UsersModel();
        $query = $userModel->findAll();

        $data['usersList'] = $query;
        $data['view'] = 'admin/users/users_list';
        return view('layout', $data);
    }

    public function details()
    {
        $data['view'] = 'admin/users/view_user';
        return view('layout', $data);
    }

    public function add()
    {

        helper(['form']);

        $branchesModel = new BranchesModel();
        $rolesModel = new RolesModel();
        $data['branches'] = $branchesModel->findAll();
        $data['roles'] = $rolesModel->findAll();
        $data['view'] = 'admin/users/add_user';

        if ($this->request->getMethod(TRUE) == "POST") {

            $rules = [
                'firstname'       => 'required|min_length[3]',
                'lastname'        => 'required|min_length[3]',
                'adresse'         => 'required',
                'brancheId'       => 'required',
                'cin'             => 'required',
                'mobile_no'       => 'required',
                'dateInscription' => 'required',
                'gender'          => 'required',
                'language'        => 'required',
                'role'            => 'required',
            ];
            if ($this->request->getVar('role') == "ADM" || $this->request->getVar('role') == "RSP") {
                $rules['email'] = 'required|min_length[6]|max_length[50]|valid_email|is_unique[ci_users.email]';
                $rules['password'] = 'required|min_length[6]|max_length[20]';
                $rules['cpassword'] = 'matches[password]';
            }
            if ($this->validate($rules)) {

                $userModel = new UsersModel();
                $data = [

                    'firstname'  => $this->request->getVar('firstname'),
                    'lastname'   => $this->request->getVar('lastname'),
                    'adresse'    => $this->request->getVar('adresse'),
                    'brancheId'  => $this->request->getVar('brancheId'),
                    'cin'        => $this->request->getVar('cin'),
                    'mobile_no'  => $this->request->getVar('mobile_no'),
                    'created_at' => $this->request->getVar('dateInscription'),
                    'sexe'       => $this->request->getVar('gender'),
                    'language'   => $this->request->getVar('language'),
                    'role'       => $this->request->getVar('role'),
                ];
                if ($this->request->getVar('role') == "ADM" || $this->request->getVar('role') == "RSP") {
                    $data['email'] =     $this->request->getVar('email');
                    $data['password'] =  password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);
                }
                $userModel->save($data);
                return redirect()->to('/users');
            } else {
                $data['validation'] = $this->validator;
                return view('layout', $data);
            }
        }


        return view('layout', $data);
    }

    public function edit($id = 0)
    {
        helper(['form']);

        $userModel = new UsersModel();
        $branchesModel = new BranchesModel();
        $rolesModel = new RolesModel();

        $data['editedUser'] = $userModel->find($id);
        $data['branches'] = $branchesModel->findAll();
        $data['roles'] = $rolesModel->findAll();

        $data['view'] = 'admin/users/edit_user';
        return view('layout', $data);
    }
    public function del($id = 0)
    {
        $userModel = new UsersModel();
        $userModel->delete($id);
        return redirect()->to('/users');
    }
}
