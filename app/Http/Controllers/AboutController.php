<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function adminabout()
    {
        return view('Admin.about', [
            'title' => 'About Me',
            'content' => [
                'Miftakhul Rizq Hisyam',
                'Coding / Gaming',
                'https://github.com/SkiiOS',
            ],
        ]);
    }
}
