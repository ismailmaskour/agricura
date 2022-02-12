<?php

namespace App\Controllers;

use App\Models\LangModel;

class Home extends BaseController
{
    public function index()
    {
        // Check if is logged in start;
        if (!session()->has('isLoggedIn')) {
            return redirect()->to('/auth/login');
        }
        // Check if is logged in end;

        $data['view'] = 'admin/dashboard/dashboard';
        return view('layout', $data);
    }
}
