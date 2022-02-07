<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
    }

    public function login()
    {
        if ($this->m_admin->login()) {
            echo "<script>window.location='menu';alert('Selamat datang admin!')</script>";
        } else {
            $this->session->set_flashdata('fail', 'Login Gagal');
            redirect('admin');
        }
    }
}

