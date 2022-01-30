<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{
    public function index()
    {
        return view('users/vw_login');
    }

    public function process()
    {
        $users = new UsersModel();
        $npm = $this->request->getVar('npm');
        $token = $this->request->getVar('token');
        $dataUser = $users->where([
            'npm' => $npm,
        ])->first();
        if ($dataUser) {
            if (password_verify($token, $dataUser->token)) {
                session()->set([
                    'npm' => $dataUser->npm,
                    'name' => $dataUser->name,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('home'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }
}
