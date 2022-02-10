<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
    }

    // Halaman login admin
    public function index()
    {
        if ($this->session->userdata('login')) {
            redirect('admin/menu');
        }

        if ($this->session->userdata('login_user')) {
            redirect('pilih');
        }

        $this->load->view('admin/v_login');
    }

    // Login 
    public function login()
    {
        if ($this->m_admin->login()) {
            echo "<script>window.location='menu';alert('Selamat datang admin!')</script>";
        } else {
            $this->session->set_flashdata('fail', 'Login Gagal');
            redirect('admin');
        }
    }

    // Tampilan halaman menu
    public function menu()
    {
        if (!$this->session->userdata('login')) {
            redirect('admin');
        }

        $this->load->view('admin/v_menu');
    }

    // Menampilkan tabulasi data warga
    public function warga()
    {
        $data['warga'] = $this->m_admin->get_warga();
        $this->load->view('admin/v_warga', $data);
    }
}

