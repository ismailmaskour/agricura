<?php

namespace App\Controllers;

class Products extends BaseController
{
    public function index()
    {
        // Check if is logged in start;
        if (!session()->has('isLoggedIn')) {
            return redirect()->to('/auth/login');
        }
        // Check if is logged in end;   

        $data['view'] = 'admin/products/products_list';
        return view('layout', $data);
    }
    public function add()
    {
        // Check if is logged in start;
        if (!session()->has('isLoggedIn')) {
            return redirect()->to('/auth/login');
        }
        // Check if is logged in end;   

        $data['view'] = 'admin/products/add_product';
        return view('layout', $data);
    }
    public function edit($id = 0)
    {
        // Check if is logged in start;
        if (!session()->has('isLoggedIn')) {
            return redirect()->to('/auth/login');
        }
        // Check if is logged in end;   

        $data['view'] = 'admin/products/edit_product';
        return view('layout', $data);
    }
    
}
