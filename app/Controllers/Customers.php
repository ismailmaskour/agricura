<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        // Check if is logged in start;
        if (!session()->has('isLoggedIn')) {
            return redirect()->to('/auth/login');
        }
        // Check if is logged in end;   

        $data['view'] = 'admin/customers/customers_list';
        return view('layout', $data);
    }
    public function add()
    {
        // Check if is logged in start;
        if (!session()->has('isLoggedIn')) {
            return redirect()->to('/auth/login');
        }
        // Check if is logged in end;   

        $data['view'] = 'admin/customers/add_customer';
        return view('layout', $data);
    }
    public function edit($id = 0)
    {
        // Check if is logged in start;
        if (!session()->has('isLoggedIn')) {
            return redirect()->to('/auth/login');
        }
        // Check if is logged in end;   

        $data['view'] = 'admin/customers/edit_customer';
        return view('layout', $data);
    }
    
}
