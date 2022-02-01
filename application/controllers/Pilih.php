<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pilih extends CI_Controller
{


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
}
