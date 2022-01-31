<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('users/vw_home', $data);
    }
}
