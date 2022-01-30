<?php

namespace App\Controllers;

use App\Models\UsersModel;

class DataUser extends BaseController
{
    protected $varData;
    public function __construct()
    {
        $this->varData = new UsersModel();
    }
    public function index()
    {
        $varData = $this->varData->findAll();
        $data = [
            'title' => 'Data User Admin',
            'data' => $varData
        ];
        return view('admin/vw_dataUser', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data User'
        ];

        return view('admin/vw_tambahDataUser', $data);
    }

    public function save()
    {

        if (!$this->validate([
            'id' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'npm' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'status' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],


        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->varData->insert([
            'id' => $this->request->getVar('id'),
            'npm' => $this->request->getVar('npm'),
            'status' => $this->request->getVar('status')
        ]);


        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/datauser');
    }
}
