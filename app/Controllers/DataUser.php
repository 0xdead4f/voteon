<?php

namespace App\Controllers;

use App\Models\UsersModel;

class DataUser extends BaseController
{
    protected $dataUserModel;
    public function __construct()
    {
        $this->dataUserModel = new UsersModel();
    }

    public function coba()
    {
        $data['percobaan'] = $this->dataUserModel->coba();

        return view('coba', $data);
    }

    public function index()
    {
        $dataUserModel = $this->dataUserModel->findAll();
        $data = [
            'title' => 'Data User Admin',
            'data' => $dataUserModel
        ];
        return view('admin/vw_dataUser', $data);
    }

    public function create()
    {
        session();
        $data = [
            'title' => 'Tambah Data User',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/vw_tambahDataUser', $data);
    }

    //SAVE VALIDATE KE 1
    public function save()
    {

        if (!$this->validate([
            'id' => [
                'rules' => 'required|is_unique[data_pemilih.id]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'is_unique' => '{field} Harus unik'
                ]
            ],
            'npm' => [
                'rules' => 'required|is_unique[data_pemilih.npm]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'is_unique' => '{field} Harus unik'
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

        $this->dataUserModel->insert([
            'id' => $this->request->getVar('id'),
            'npm' => $this->request->getVar('npm'),
            'status' => $this->request->getVar('status')
        ]);


        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/datauser');
    }

    //SAVE VALIDATE ke-2
    public function save_dua()
    {
        if (!$this->validate([
            'id' => [
                'rules' => 'required|is_unique[data_pemilih.id]',
                'errors' => [
                    'required' => '{field} wajib diisi!',
                    'is_unique' => '{field} Wajib unik!'
                ]
            ],
            'npm' => [
                'rules' => 'required|is_unique[data_pemilih.npm]',
                'errors' => [
                    'required' => '{field} wajib diisi!',
                    'is_unique' => '{field} Wajib unik!'
                ]
            ],
            'status' => [
                'rules' => 'required|is_unique[data_pemilih.status]',
                'errors' => [
                    'required' => '{field} wajib diisi!',
                    'is_unique' => '{field} Wajib unik!'
                ]
            ],
        ])) {

            return redirect()->to('/datauser/create')->withInput();
        }

        $this->dataUserModel->insert([
            'id' => $this->request->getVar('id'),
            'npm' => $this->request->getVar('npm'),
            'status' => $this->request->getVar('status')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/datauser');
    }

    public function delete($id)
    {
        $this->dataUserModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/datauser');
    }

    public function edit($id)
    {

        $ambil_data = $this->dataUserModel->getDataPemilih($id);
        $data = [
            'title' => 'Form edit',
            'data' => $ambil_data
        ];



        return view('admin/vw_editdatauser', $data);
    }

    public function update($id)
    {
        if (!$this->validate([

            'npm' => [
                'rules' => 'required|is_unique[data_pemilih.npm]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'is_unique' => '{field} Sudah ada'
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

        $this->dataUserModel->save([
            'id' => $id,
            'npm' => $this->request->getVar('npm'),
            'status' => $this->request->getVar('status')
        ]);


        session()->setFlashdata('pesan', 'Data berhasil diedit');
        return redirect()->to('/datauser');
    }
}
