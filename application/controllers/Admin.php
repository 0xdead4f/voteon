<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
    }

    //8
    public function opsi()
    {

        if (!$this->session->userdata('login')) {
            redirect('admin');
        }
        $this->load->view('admin/v_opsi');
    }

    //9
    public function reset_surat_suara()
    {
        $status = $this->m_admin->deleteSuratSuara();
        if ($status) {
            $this->session->set_flashdata('success', 'Berhasil mereset surat suara');
            redirect('admin/opsi');
        } else {
            $this->session->set_flashdata('fail', 'Gagal mereset surat suara');
            redirect('admin/opsi');
        }
    }
}
