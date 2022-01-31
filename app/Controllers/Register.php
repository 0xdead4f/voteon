<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Register extends BaseController
{
    public function index()
    {
        return view('vm_register');
    }

    public function process()
    {
        if (!$this->validate([
            'id' => [
                'rules' => 'required|max_length[1]|is_unique[data_pemilih.id]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'max_length' => '{field} Maksimal 1 Karakter',
                    'is_unique' => 'id sudah digunakan sebelumnya'
                ]
            ],
            'npm' => [
                'rules' => 'required|min_length[10]|max_length[11]',
                'errors' => [
                    'required' => '{field} Harus Diisi',
                    'min_length' => '{field} Minimal 10 Karakter',
                    'max_length' => '{field} Maksimal 11 Karakter',
                ],
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $users = new UsersModel();
        $users->insert([
            'id' => $this->request->getVar('id'),
            'npm' => $this->request->getVar('npm'),
            'status' => $this->request->getVar('status')
        ]);
        return redirect()->to('/login');
    }
}
