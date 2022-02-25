<?php

namespace App\Controllers;

class Branches extends BaseController
{
    public function index()
    {
        // Check if is logged in start;
        if (!session()->has('isLoggedIn')) {
            return redirect()->to('/auth/login');
        }
        // Check if is logged in end;  

        $data['view'] = 'admin/branches/branches_list';
        return view('layout', $data);
    }
    public function add()
    {
        // Check if is logged in start;
        if (!session()->has('isLoggedIn')) {
            return redirect()->to('/auth/login');
        }
        // Check if is logged in end;  

        $data['view'] = 'admin/branches/add_branch';
        return view('layout', $data);
    }
    public function edit($id = 0)
    {
        // Check if is logged in start;
        if (!session()->has('isLoggedIn')) {
            return redirect()->to('/auth/login');
        }
        // Check if is logged in end;  

        $data['view'] = 'admin/branches/edit_branch';
        return view('layout', $data);
    }
    
}
