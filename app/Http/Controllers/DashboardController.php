<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function admindashboard()
    {

        return view('Admin.dashboard', [
            'title' => 'Dashboard',
            'content' => 'Welcome to the Admin Dashboard',
        ]);
    }
}
