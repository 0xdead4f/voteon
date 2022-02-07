<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
    }

    public function opsi()
    {

        if (!$this->session->userdata('login')) {
            redirect('admin');
        }
        $this->load->view('admin/v_opsi');
    }
}
