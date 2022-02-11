<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pilih extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pilih');
        $this->load->model('m_admin');
    }

    public function index()
    {
        if ($this->session->userdata('login')) {
            redirect('admin');
        }

        if ($this->session->userdata('login_user')) {
            redirect('pilih/calon');
        }
        $this->load->view('user/v_verif');
    }

    public function verif()
    {

        if ($this->m_pilih->verif($this->input->post('nik'), $this->input->post('token'))) {
            redirect('pilih/calon');
        } else {
            $this->session->set_flashdata('fail', 'Gagal Verifikasi');
            redirect('pilih');
        }
    }
}
